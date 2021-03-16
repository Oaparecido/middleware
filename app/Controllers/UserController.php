<?php


namespace Controllers;


use Helpers\ResponseHelper;
use Models\User;

class UserController
{
    private string $alias = 'user';

    public function __construct()
    {
        // Connect DB
    }

    public function store($data): array
    {
        // ValidatorsHelper::data($data);
        // $response = SanitizeHelper::data($data);

        $response = [];

        User::create($response);

        return ResponseHelper::created($this->alias . '.created-successfully', $response);
    }
}