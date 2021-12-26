<?php declare(strict_types=1);

namespace StrictTest\Controllers\Routing;

use Strict\Controllers\Routing\Route;
use Strict\Controllers\Routing\WebRoute;
use Strict\Controllers\Routing\WebRouter;
use Strict\Tools\Collections\Lists\WebRouteList;
use StrictTest\Controllers\DefaultWebTestController;
use StrictTest\Controllers\WebTestController;

class WebTestRouter extends WebRouter
{

    protected function getDefaultRoute(): Route
    {
        return new WebRoute("/", new DefaultWebTestController());
    }

    protected function getRoutes(): WebRouteList
    {
        $list =  new WebRouteList();
        $list->add(new WebRoute("/",new WebTestController()));
        return $list;
    }
}
