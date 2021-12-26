<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\Parameters\CliParamManager;
use Strict\Tools\Collections\Lists\CliRouteList;
use Strict\Tools\Collections\Lists\RoutingStrategyList;

abstract class CliRouter extends Router
{
    private CliParamManager $params;

    public function __construct(CliParamManager $params)
    {
        $this->params = $params;
    }

    public function getRoutingStrategies(): RoutingStrategyList
    {
        $list = new RoutingStrategyList();
        $routes = $this->getRoutes();
        foreach($routes as $route)
        {
            $strat = new CliRoutingStrategy($route,$this->params);
            $list->add($strat);
        }
        return $list;
    }

    abstract protected function getRoutes() : CliRouteList;

    abstract protected function getDefaultRoute(): CliRoute;

}
