<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Tools\Collections\Lists\RoutingStrategyList;

abstract class Router
{

    abstract protected function getRoutingStrategies(): RoutingStrategyList;

    abstract protected function getDefaultRoute(): Route;

    public function findRoute(): Route
    {
        $strategies = $this->getRoutingStrategies();
        foreach ($strategies as $strategy) {
            if ($strategy->matches()) {
                return $strategy->getRoute();
            }
        }
        return $this->getDefaultRoute();
    }
}
