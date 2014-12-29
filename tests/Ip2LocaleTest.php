<?php

use Dimsav\IpService\IpService;

class Ip2LocaleTest extends \TestsBase {

    /**
     * @test
     */
    public function it_returns_the_appropriate_locale_depending_the_ip_of_the_client()
    {
        $greekIp = '62.103.107.58';
        $germanIp = '82.113.108.15';
        $cyprusIp = '212.31.123.190';

        Request::shouldReceive('ip')->once()->andReturnValues([
            $greekIp,
            $germanIp,
            $cyprusIp
        ]);

        $service = $this->getService();
        $this->assertSame('gr', $service->getCountryCodeFromClientIp());
        $this->assertSame('de', $service->getCountryCodeFromClientIp());
        $this->assertSame('cy', $service->getCountryCodeFromClientIp());
    }

    /**
     * @return IpService
     */
    private function getService()
    {
        return App::make('Dimsav\IpService\IpService');
    }
}

