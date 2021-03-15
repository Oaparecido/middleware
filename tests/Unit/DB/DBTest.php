<?php

namespace Tests\DB;

use Helpers\DBHelper;
use PHPUnit\Framework\TestCase;
use Exception;

class DBTest extends TestCase
{
    /**
     * @test
     * @throws Exception
     */
    public function connection ()
    {
        $connect = DBHelper::up();
        $this->assertNotNull($connect);
    }

}