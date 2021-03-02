<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\Mock\Load\LoadMock;

class MiddlewareTest extends TestCase
{
    private $mock;

    protected function setUp(): void
    {
        $this->mock = LoadMock::getDataUser();
        parent::setUp();
    }

    /**
     * @test
     */
    public function makeUser()
    {
        //TODO (feature|sanitize data) -> Create test to middleware, save data in DB.

    }

}