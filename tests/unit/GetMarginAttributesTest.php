<?php

namespace rocketfellows\TinkoffInvestV1UsersRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1UsersRestClient\GetMarginAttributesInterface;

/**
 * @group methods
 */
class GetMarginAttributesTest extends UsersServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('GetMarginAttributes', $expectedResponse, self::PARAMS);

        return $this->usersService->getMarginAttributes(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetMarginAttributesInterface::class,
        ];
    }
}
