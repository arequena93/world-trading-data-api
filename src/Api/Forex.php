<?php

namespace WorldTradingData\Api;

/**
 * Class Forex
 * @package WorldTradingData\Api
 */

class Forex extends AbstractApi
{
    const SORT_BY_DATE_NEWEST = 'newest';
    const SORT_BY_DATE_OLDEST = 'oldest';

    const ALTER_FORMAT_OUTPUT = 'true';

    /**
     * @param string $symbolName
     * @return array
     */
    public function realTime(string $symbolName)
    {
        return $this->get(
            'forex',
            [
                'base' => $symbolName
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $convertTo
     * @param string $dateFrom
     * @param string $dateTo
     * @param string $sort
     * @param string $output
     * @param string $alterFormat
     * @return array
     */
    public function historical(string $symbolName, string $convertTo, string $dateFrom = '', string $dateTo = '', string $sort = self::SORT_BY_DATE_NEWEST, string $output = self::DATA_TYPE_JSON, string $alterFormat = self::ALTER_FORMAT_OUTPUT)
    {
        return $this->get(
            'forex_history',
            [
                'base' => $symbolName,
                'convert_to' => $convertTo,
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
                'sort' => $sort,
                'output' => $output,
                'formatted' => $alterFormat
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $date
     * @param string $output
     * @param string $alterFormat
     * @return array
     */
    public function singleDayHistory(string $symbolName, string $date = '', string $output = self::DATA_TYPE_JSON, string $alterFormat = self::ALTER_FORMAT_OUTPUT)
    {
        return $this->get(
            'forex_single_day',
            [
                'base' => $symbolName,
                'date' => $date,
                'output' => $output,
                'formatted' => $alterFormat
            ]
        );
    }
}
