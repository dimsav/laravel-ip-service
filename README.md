Laravel IP Service
====================

Tries to guess the country code of the client, using his IP.

## Installation


[Download](http://ip2nation.com/ip2nation/Download) and import the ip database from [ip2nation.com](http://ip2nation.com/)

## Usage

```php
$service = App::make('Dimsav\IpService\IpService');

echo $service->getCountryCodeFromIp('123.123.123.123'); // country code for give ip address
echo $service->getCountryCodeFromClientIp(); // country code of client's ip address
```
