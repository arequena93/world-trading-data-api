<?php

use WorldTradingData\Api\AbstractApi;
use WorldTradingData\Client;
use WorldTradingData\Options;
use WorldTradingData\Exception;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $this->assertInstanceOf(Client::class, new Client(new Options()));
    }

    public function testMagicMethodCall()
    {
        $historic = (new Client(new Options()))->historical();

        $this->assertInstanceOf(AbstractApi::class, $historic);
    }

    public function testMagicMethodCallException()
    {
        $this->expectException(Exception\BadMethodCallException::class);
        $this->expectExceptionMessage('Invalid method call: "unexistingmethod"');

        $client = new Client(new Options());
        $client->unexistingmethod();
    }

    public function testMagicMethodCallUpperCase()
    {
        $historic = (new Client(new Options()))->HiStOrIcAl();

        $this->assertInstanceOf(AbstractApi::class, $historic);
    }

    public function testMagicMethodCallCaseNotMatch()
    {
        $historic = (new Client(new Options()))->hist_oRical();

        $this->assertInstanceOf(AbstractApi::class, $historic);   
    }

    public function testApiCallException()
    {
        $this->expectException(Exception\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid api call: "unexistingmethod2"');

        $client = new Client(new Options());
        $client->api('unexistingmethod2');
    }
}
