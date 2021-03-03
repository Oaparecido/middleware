<?php

namespace Tests\Mock\Load;

use function Couchbase\defaultDecoder;

class LoadMock
{
    private static string $path = __DIR__ . '/../';

    /**
     * @return bool|string
     */
    public static function getDataUser(): bool|string
    {
        return file_get_contents(self::$path . 'user.json');
    }
}