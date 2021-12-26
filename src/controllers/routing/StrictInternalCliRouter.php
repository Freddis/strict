<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\DefaultCliController;
use Strict\Controllers\Framework\CodeGeneratorController;
use Strict\Tools\Collections\Lists\CliRouteList;

class StrictInternalCliRouter extends CliRouter
{
    public function getRoutes(): CliRouteList
    {
       $routes = new CliRouteList();
       $routes->add(new CliRoute("codegen",new CodeGeneratorController()));
       return $routes;
    }

    public function getDefaultRoute(): CliRoute
    {
        return new CliRoute("default",new DefaultCliController());
    }
}
