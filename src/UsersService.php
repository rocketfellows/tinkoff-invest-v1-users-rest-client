<?php

namespace rocketfellows\TinkoffInvestV1UsersRestClient;

use rocketfellows\TinkoffInvestV1RestClient\Client;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException;

class UsersService implements
    GetAccountsInterface,
    GetInfoInterface,
    GetMarginAttributesInterface,
    GetUserTariffInterface
{
    private const SERVICE_NAME = 'UsersService';

    private const SERVICE_METHOD_NAME_GET_ACCOUNTS = 'GetAccounts';
    private const SERVICE_METHOD_NAME_GET_INFO = 'GetInfo';
    private const SERVICE_METHOD_NAME_GET_MARGIN_ATTRIBUTES = 'GetMarginAttributes';
    private const SERVICE_METHOD_NAME_GET_USER_TARIFF = 'GetUserTariff';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getAccounts(): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_ACCOUNTS);
    }

    public function getInfo(): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_INFO);
    }

    public function getMarginAttributes(array $params): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_MARGIN_ATTRIBUTES, $params);
    }

    public function getUserTariff(): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_USER_TARIFF);
    }

    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    private function requestMethod(string $methodName, ?array $params = null): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            $methodName,
            $params
        );
    }
}
