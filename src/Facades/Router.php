<?php

namespace Enniel\Wampeer\Facades;

use Illuminate\Support\Facades\Facade;
use Thruway\Peer\RouterInterface;

/**
 * @see \Thruway\Peer\RouterInterface
 */
class Router extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return RouterInterface::class;
    }
}
