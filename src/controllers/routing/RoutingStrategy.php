<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

abstract class RoutingStrategy
{
    private Route $route;

    abstract public function matches(): bool;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    public function getRoute(): Route
    {
        return $this->route;
    }
}
