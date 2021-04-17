<?php

namespace Tests\Unit\User;

use Controllers\UserController;
use PHPUnit\Framework\TestCase;
use Tests\Mock\Load\LoadMock;

class UserTest extends TestCase
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
    public function create()
    {
        //TODO (feature) -> Create user and save data in DB.
        $controller = new UserController();

        $response = $controller->store($this->mock);

        $expected = [
            'code' => 201,
            'success' => true,
            'params' => [
                'message' => 'user.created-successfully',
                'name' => '',
                'email' => '',
                'age' => '',
                'contacts' => '',
            ],
        ];

        $this->assertEquals($expected, $response, 'Response not is equal' . PHP_EOL . var_dump('Response:' . PHP_EOL, $response) . var_dump('Expected:' . PHP_EOL, $expected));
        return $response;
    }

    /**
     * @test
     * @depends create
     * @param array $data
     */
    public function login(array $data)
    {
        $data = [
            'email' => $data['params']['email'],
            'password' => '@Senha123'
        ];

        $controller = new Controllers\AuthController();
        $response = $controller->auth($data);

        $expected = [
            'code' => 201,
            'success' => true,
            'params' => [
                'authenticated' => true,
                'message' => 'user.logged-successfully',
                'logged_data' => [
                    'id' => '',
                    'name' => ''
                ],
            ],
        ];

        $this->assertEquals($expected, $response, 'Response not is equal' . PHP_EOL . var_dump('Response:' . PHP_EOL, $response) . var_dump('Expected:' . PHP_EOL, $expected));
    }

}