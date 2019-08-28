# World Trading Data PHP Client

[![Build Status](https://travis-ci.org/arequena93/world-trading-data-api.svg?branch=master)](https://travis-ci.org/arequena93/world-trading-data-api)

PHP-Client (wrapper) for the [World Trading Data](https://www.worldtradingdata.com/) service.

## Requirements:
- PHP 7.0+
- Composer (https://getcomposer.org/download/)
- WorldTradingData API key: [WorldTradingData-Api-Key](https://www.worldtradingdata.com/register)

## Installation

```
php composer.phar require arequena93/world-trading-data-api
```

## Usage

```
$option = new WorldTradingData\Options();
$option->setApiKey('YOUR_API_KEY');
$client = new WorldTradingData\Client($option);
var_dump($client->historical()->fullHistory('ITX.MC'));
```
