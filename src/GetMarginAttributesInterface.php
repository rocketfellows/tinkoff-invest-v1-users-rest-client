<?php

namespace rocketfellows\TinkoffInvestV1UsersRestClient;

use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException;

interface GetMarginAttributesInterface
{
    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    public function getMarginAttributes(array $params): array;
}
