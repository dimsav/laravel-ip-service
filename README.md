Laravel IP Service
====================

Tries to guess the country code of the client, using his IP.

## Installation


[Download](http://ip2nation.com/ip2nation/Download) and import the ip database from [ip2nation.com](http://ip2nation.com/)

## Usage

```php
$service = App::make('Dimsav\IpService\IpService');

// country code for the given ip address

echo $service->getCountryCodeFromIp('123.123.123.123');  // de

// country code for the client's ip address

echo $service->getCountryCodeFromClientIp(); 
```
