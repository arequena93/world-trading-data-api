<?php

namespace WorldTradingData\Api;

/**
 * Class Historical
 * @package WorldTradingData\Api
 */

class Historical extends AbstractApi
{
    const SORT_BY_DATE_NEWEST = 'newest';
    const SORT_BY_DATE_OLDEST = 'oldest';
    const SORT_BY_DATE_DESC = 'desc';
    const SORT_BY_DATE_ASC = 'asc';

    const ALTER_FORMAT_OUTPUT = 'true';

    /**
     * @param string $symbolName
     * @param string $dateFrom
     * @param string $dateTo
     * @param string $sort
     * @param string $output
     * @param string $alterFormat
     * @return array
     */
    public function fullHistory(string $symbolName, string $dateFrom = '', string $dateTo = '', string $sort = self::SORT_BY_DATE_NEWEST, string $output = self::DATA_TYPE_JSON, string $alterFormat = self::ALTER_FORMAT_OUTPUT)
    {
        return $this->get(
            'history',
            $symbolName,
            [
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
                'sort' => $sort,
                'output' => $output,
                'formatted' => $alterFormat
            ]
        );
    }
}
