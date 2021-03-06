<?php

/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Account\Tests\Integration\ServicesProvider;

use UserFrosting\Sprinkle\Account\Authorize\AuthorizationManager;
use UserFrosting\Tests\TestCase;

/**
 * Integration tests for `authorizer` service.
 * Check to see if service returns what it's supposed to return
 */
class AuthorizerServiceTest extends TestCase
{
    public function testService()
    {
        $this->assertInstanceOf(AuthorizationManager::class, $this->ci->authorizer);
    }
}
