<?php

namespace StrictTest\Controllers\Routing;

use Strict\Controllers\Controller;
use Strict\Controllers\Parameters\WebParamManager;
use Strict\Controllers\Routing\Route;
use Strict\Controllers\Routing\WebRoute;
use Strict\Controllers\Routing\WebRouter;
use Strict\Tools\Collections\Lists\WebRouteList;

class MockingRouter extends WebRouter
{

    private Controller $controller;

    public function __construct(WebParamManager $params, Controller $defaultController)
    {
        parent::__construct($params);
        $this->controller = $defaultController;
    }

    protected function getDefaultRoute(): Route
    {
        return new WebRoute("/", $this->controller);
    }

    protected function getRoutes(): WebRouteList
    {
        return new WebRouteList();
    }

    /**
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }
}
