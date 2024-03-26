<?php

namespace MuhamadAldizarIlham\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {

        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("This is log message", ["username" => "Aldizar"]);
        $logger->info("Try login user", ["username" => "Aldizar"]);
        $logger->info("Success login user", ["username" => "Aldizar"]);
        $logger->info("Tidak ada context");

        self::assertNotNull($logger);

    }

}