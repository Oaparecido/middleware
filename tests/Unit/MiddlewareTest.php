<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MiddlewareTest extends TestCase
{
    private $mock;

    protected function setUp(): void
    {
        $this->mock = $this->loadMock();
        parent::setUp();
    }

    /**
     * @test
     */
    public function makeUser()
    {
        //TODO (feature|sanitize data) -> Create test to middleware, save data in DB.
        $data = [

        ];
    }

    private function loadMock()
    {

    }
}