<?php

namespace Enniel\Wampeer\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    //
    protected function getPackageProviders($app)
    {
        return [
            \Enniel\Wampeer\Providers\WampeerServiceProvider::class,
        ];
    }
}
