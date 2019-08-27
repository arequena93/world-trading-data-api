# World Trading Data PHP Client

[![Build Status](https://travis-ci.org/arequena93/world-trading-data-api.svg?branch=master)](https://travis-ci.org/arequena93/world-trading-data-api)

PHP-Client for the World Tranding Data service acting as a wrapper  [World Trading Data](https://www.worldtradingdata.com/).

## Requirements:
- PHP 7.0+
- composer (https://getcomposer.org/download/)
- WorldTradingData Key, that you get @ [WorldTradingData-Api-Key](https://www.worldtradingdata.com/register)

## Install

```
php composer.phar require arequena93/world-trading-data-api
```


## How to use it?

```
$option = new WorldTradingData\Options();
$option->setApiKey('YOUR_API_KEY');
$client = new WorldTradingData\Client($option);
var_dump($client->historical()->fullHistory('ITX.MC'));
```
