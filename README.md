# World Trading Data PHP Client

[![Build Status](https://travis-ci.org/arequena93/world-trading-data-api.svg?branch=master)](https://travis-ci.org/arequena93/world-trading-data-api)

PHP-Client (wrapper) for the [World Trading Data](https://www.worldtradingdata.com/) service.

## Requirements
- PHP 7.0+
- Composer (https://getcomposer.org/download/)
- WorldTradingData API key: [WorldTradingData-Api-Key](https://www.worldtradingdata.com/register)

## Installation

```
php composer.phar require arequena93/world-trading-data-api
```

## Usage

### Initialization
```
$option = new WorldTradingData\Options();
$option->setApiKey('YOUR_API_KEY');
$client = new WorldTradingData\Client($option);
```

### Functionalities

<table>
  <tbody>
    <tr>
        <th colspan='2' align='center'>WTD functions</th>
        <th align='center'>Usage</th>
        <th align='center'>Parameters</th>
    </tr>
    <tr>
        <th rowspan='2'>Real Time Market Data</th>
        <td>Stock and index real time</td>
        <td><code>$client->realtime()->stockAndIndexRealTime('AAPL');</code></td>
        <td>&nbsp;</td>
    </tr>
        <tr>
        <td>Mutual fund real time</td>
        <td><code>$client->realtime()->mutualFundRealTime('AAAAX');</code></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th>Intraday Market Data</th>
        <td>Stock and index intraday</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th rowspan='2'>Historical Market Data</th>
        <td>Full history</td>
        <td><code>$client->historical()->fullHistory('ITX.MC');</code></td>
        <td>&nbsp;</td>
    </tr>
        <tr>
        <td>Multi single day history</td>
        <td><code>$client->historical()->multiSingleDayHistory('AAPL,ITX.MC', '2018-01-02');</code></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th rowspan='3'>Forex</th>
        <td>Real time</td>
        <td><code>$client->forex()->realTime('EUR');</code></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Historical</td>
        <td><code>$client->forex()->historical('USD', 'GBP');</code></td>
        <td>&nbsp;</td>
    </tr>
        <tr>
        <td>Single day history</td>
        <td><code>$client->forex()->singleDayHistory('USD', '2018-08-31');</code></td>
        <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
