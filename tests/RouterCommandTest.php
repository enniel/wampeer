<?php

namespace Enniel\Wampeer\Tests;

use Illuminate\Support\Facades\Artisan;
use Thruway\Transport\RatchetTransportProvider;
use Thruway\Transport\RawSocketTransportProvider;
use Enniel\Wampeer\Facades\Router;

class RouterCommandTest extends TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        Router::registerModules([
            // Websocket listener
            new RatchetTransportProvider(),
            // Rawsocket listener
            new RawSocketTransportProvider(),
        ]);
    }

    /**
     * Test starting command
     */
    public function testStartCommand()
    {
        $this->artisan('wampeer:router:start', [
            '--loop'  => false,
        ]);

        $this->assertRegExp('/Start Thruway WAMP router/', Artisan::output());
    }
}
