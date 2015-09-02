<?php

namespace Ojs\ApiBundle\Tests\Controller;

use Ojs\CoreBundle\Tests\BaseTestCase;

class RoleRestControllerTest extends BaseTestCase
{
    public function testRole()
    {
        $response = $this->apiRequest('/api/role/1');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testRoleUser()
    {
        $response = $this->apiRequest('/api/role/1/users');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testJournalRoleUsers()
    {
        $response = $this->apiRequest('/api/role/1/journal/1/users');
        $this->assertEquals(200, $response->getStatusCode());
    }
}
