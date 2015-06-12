# Sms Component [![License](https://poser.pugx.org/yoqut/sms/license.svg)](https://packagist.org/packages/yoqut/sms) [![Build Status](https://travis-ci.org/Yoqut/Sms.svg?branch=master)](https://travis-ci.org/Yoqut/Sms) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Yoqut/Sms/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Yoqut/Sms/?branch=master)

An SMS component for PHP applications.

## Installation
composer.json
```json
{
    "require": {
        "yoqut/sms": "~2.0"
    }
}
```

```shell
php composer.phar install
```

or

```shell
php composer.phar require yoqut/sms
```

## Usage
```php
// Imports
use Yoqut\Component\Sms\Factory\SmsFactory;
use Yoqut\Component\Sms\Factory\GatewayFactory;
use Yoqut\Component\Sms\Gateway\Matcher;
use Yoqut\Component\Sms\Sender\Sender;

// Create a new SMS
$sms = SmsFactory::create();
$sms->setSender('Sender');
$sms->setRecipient('5550100');
$sms->setMessage('Message');

// Create a new gateway
// Provide host, port, username, password, service numbers (optional),
// prefix codes (optional) and configurations (optional)
$gateway = GatewayFactory::create(
    'localhost',
    2775,
    'username',
    'password',
    array(
        '5555', // Production
        '4444' // Development
    ),
    array('555')
);

// Array of gateways
$gateways = array($gateway);

// Create a new gateway matcher
$matcher = new Matcher($gateways);
$matchedGateway = $matcher->match($sms);

// Print the matched gateway
echo '<pre>';
print_r($matchedGateway);
echo '</pre>';

if ($matchedGateway) {
    // Use one of the gateway service numbers as a sender if needed
    $serviceNumbers = $gateway->getServiceNumbers();
    $sms->setSender($serviceNumbers[0]);

    // Send an SMS to the matched gateway
    $sender = new Sender();
    $messageId = $sender->send($sms, $matchedGateway);
    echo $messageId;
}
```

## Tests
```shell
vendor/phpspec/phpspec/bin/phpspec run
```

## License
[MIT License](https://github.com/Yoqut/Sms/blob/master/LICENSE "MIT License")

## Authors
The component was created by [Sukhrob Khakimov](https://github.com/Sukhrob "Sukhrob Khakimov"). See the list of [contributors](https://github.com/Yoqut/Sms/graphs/contributors "contributors").
