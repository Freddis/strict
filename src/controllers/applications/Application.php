<?php declare(strict_types=1);

namespace Strict\Controllers\Applications;

use Strict\Controllers\Parameters\ParamManager;
use Strict\Controllers\Routing\Router;
use Strict\Views\View;

abstract class Application
{
    public function run(): View
    {
        $router = $this->getRouter();
        $route = $router->findRoute();
        $controller = $route->getController();
        return $controller->execute();
    }

    abstract protected function getRouter(): Router;

    abstract protected function getParamManager(): ParamManager;
}
