# Tinkoff Invest V1 operations service rest client

![Code Coverage Badge](./badge.svg)

Simple implementation of tinkoff invest v1 users service.
So far provides methods:
- GetAccounts - https://tinkoff.github.io/investAPI/swagger-ui/#/UsersService/UsersService_GetAccounts
- GetInfo - https://tinkoff.github.io/investAPI/swagger-ui/#/UsersService/UsersService_GetInfo
- GetMarginAttributes - https://tinkoff.github.io/investAPI/swagger-ui/#/UsersService/UsersService_GetMarginAttributes
- GetUserTariff - https://tinkoff.github.io/investAPI/swagger-ui/#/UsersService/UsersService_GetUserTariff

Methods interfaces:
- rocketfellows\TinkoffInvestV1UsersRestClient\GetUserTariffInterface
- rocketfellows\TinkoffInvestV1UsersRestClient\GetMarginAttributesInterface
- rocketfellows\TinkoffInvestV1UsersRestClient\GetInfoInterface
- rocketfellows\TinkoffInvestV1UsersRestClient\GetAccountsInterface

Methods interfaces implementation aggregated in rocketfellows\TinkoffInvestV1UsersRestClient\UsersService.

For the sake of the interface segregation principle you should inject a specific interface as dependencies, and define the implementation through the container (DI).

## Installation
```shell
composer require rocketfellows/tinkoff-invest-v1-users-rest-client
```

## Methods contract definition

Component methods take an array as parameters, and raw arrays also serve as output values.

Methods throw the following types of exceptions:
- rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException
- rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException
- rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException

## Component dependencies

"rocketfellows/tinkoff-invest-v1-rest-client": "1.0.2" - as a common http client.

## Usage examples

Common http client configuration:

```php
$client = new Client(
    (
        new ClientConfig(
            'https://invest-public-api.tinkoff.ru/rest',
            <your_access_token>
        )
    ),
    new \GuzzleHttp\Client()
);
```

Users service configuration (or interface specific method configuration via DI):

```php
$usersService = new UsersService($client);
```

Get account portfolio method call example:

```php
$usersService->getAccounts();
```

Result scheme you can find here: https://tinkoff.github.io/investAPI/swagger-ui/#/UsersService/UsersService_GetAccounts

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
