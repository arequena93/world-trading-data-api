<?php

namespace WorldTradingData;

/**
 * Class Client
 * @package WorldTradingData
 */
class Client
{
    /** @var  Options */
    protected $options;

    /**
     * Client constructor.
     * @param Options $options
     */
    public function __construct(Options $options)
    {
        $this->options = $options;
    }

    /**
     * @param string $name
     * @return Api\AbstractApi
     * @throws Exception\InvalidArgumentException
     */
    public function api(string $name): Api\AbstractApi
    {
        $name = $this->getApiName($name);

        switch ($name) {
            case 'historical':
                $api = new Api\Historical($this->options);
                break;

            case 'forex':
                $api = new Api\Forex($this->options);
                break;
            
            default:
                throw new Exception\InvalidArgumentException(
                    sprintf('Invalid api call: "%s"', $name)
                );
        }

        return $api;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return Api\AbstractApi
     */
    public function __call(string $name, array $arguments): Api\AbstractApi
    {
        try {

            return $this->api($name);

        } catch (Exception\InvalidArgumentException $exception) {

            throw new Exception\BadMethodCallException(
                sprintf('Invalid method call: "%s"', $name)
            );
        }
    }

    /**
     * @param string $name
     * @return string
     */
    protected function getApiName(string $name): string
    {
        return strtolower(str_replace(['_', ''], '', $name));
    }
}
