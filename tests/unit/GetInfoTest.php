<?php

namespace rocketfellows\TinkoffInvestV1UsersRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1UsersRestClient\GetInfoInterface;

/**
 * @group methods
 */
class GetInfoTest extends UsersServiceTest
{
    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithoutParams('GetInfo', $expectedResponse);

        return $this->usersService->getInfo();
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetInfoInterface::class,
        ];
    }
}
