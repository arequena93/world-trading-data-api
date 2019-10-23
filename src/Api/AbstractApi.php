<?php

namespace WorldTradingData\Api;

use WorldTradingData\Exception\RuntimeException;
use WorldTradingData\Options;
use GuzzleHttp\Client;

use function GuzzleHttp\json_decode;
use function http_build_query;
use function array_merge;
use function rtrim;

/**
 * Class AbstractApi
 * @package WorldTradingData\Api
 */
class AbstractApi
{
    const DATA_TYPE_JSON = 'json';
    const DATA_TYPE_CSV = 'csv';

    /** @var  Options */
    protected $options;

    /** @var  Client */
    protected $client;

    /**
     * AbstractApi constructor.
     * @param Options $options
     */
    public function __construct(Options $options)
    {
        $this->options = $options;
        $this->client = new Client();
    }

    /**
     * @param string $functionName
     * @param array $params
     * @return array
     */
    protected function get(string $functionName, array $params = [])
    {
        $httpQuery = http_build_query(
            array_merge(
                $params,
                [
                    'api_token' => $this->options->getApiKey(),
                ]
            )
        );

        $response = $this->client->get($this->getApiUri($functionName) . $httpQuery);

        $result = json_decode($response->getBody()->getContents(), true);

        if (isset($result['Message'])) {
            throw new RuntimeException($result['Message']);
        }

        return $result;
    }

    /**
     * @return string
     */
    protected function getApiUri(string $functionName): string
    {
        return rtrim($this->options->getApiUrl(), '/') . '/'.$functionName.'?';
    }
}
