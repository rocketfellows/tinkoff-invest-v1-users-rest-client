<?php

namespace rocketfellows\TinkoffInvestV1UsersRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1UsersRestClient\GetUserTariffInterface;

/**
 * @group methods
 */
class GetUserTariffTest extends UsersServiceTest
{
    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithoutParams('GetUserTariff', $expectedResponse);

        return $this->usersService->getUserTariff();
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetUserTariffInterface::class,
        ];
    }
}
