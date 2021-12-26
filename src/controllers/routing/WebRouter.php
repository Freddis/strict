<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\Parameters\WebParamManager;
use Strict\Tools\Collections\Lists\RoutingStrategyList;
use Strict\Tools\Collections\Lists\WebRouteList;

abstract class WebRouter extends Router
{
    private WebParamManager $params;

    abstract protected function getRoutes() : WebRouteList;

    public function __construct(WebParamManager $params)
    {
        $this->params = $params;
    }
    protected function getRoutingStrategies(): RoutingStrategyList
    {
        $list = new RoutingStrategyList();
        $routes = $this->getRoutes();
        foreach($routes as $route)
        {
            $strat = new WebRoutingStrategy($route,$this->params);
            $list->add($strat);
        }
        return $list;
    }





}
