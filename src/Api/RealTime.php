<?php

namespace WorldTradingData\Api;

/**
 * Class RealTime
 * @package WorldTradingData\Api
 */

class RealTime extends AbstractApi
{
    const SORT_BY_SYMBOL = 'symbol';
    const SORT_BY_NAME = 'name';
    const SORT_BY_LIST_ORDER = 'list_order';

    const SORT_BY_DESC = 'desc';
    const SORT_BY_ASC = 'asc';

    /**
     * @param string $symbolName
     * @param string $sort_by
     * @param string $output
     * @return array
     */
    public function stockAndIndexRealTime(string $symbolName, string $sort_order = self::SORT_BY_ASC, string $sort_by = self::SORT_BY_SYMBOL, string $output = self::DATA_TYPE_JSON)
    {
        return $this->get(
            'stock',
            [
                'symbol' => $symbolName,
                'sort_order' => $sort_order,
                'sort_by' => $sort_by,
                'output' => $output
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $sort_by
     * @param string $output
     * @return array
     */
    public function mutualFundRealTime(string $symbolName, string $sort_order = self::SORT_BY_ASC, string $sort_by = self::SORT_BY_SYMBOL, string $output = self::DATA_TYPE_JSON)
    {
        return $this->get(
            'mutualfund',
            [
                'symbol' => $symbolName,
                'sort_order' => $sort_order,
                'sort_by' => $sort_by,
                'output' => $output
            ]
        );
    }
}
