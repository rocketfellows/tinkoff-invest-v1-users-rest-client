<?php

namespace rocketfellows\TinkoffInvestV1UsersRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1UsersRestClient\GetAccountsInterface;

/**
 * @group methods
 */
class GetAccountsTest extends UsersServiceTest
{
    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithoutParams('GetAccounts', $expectedResponse);

        return $this->usersService->getAccounts();
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetAccountsInterface::class,
        ];
    }
}
