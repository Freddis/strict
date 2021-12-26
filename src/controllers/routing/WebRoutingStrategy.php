<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\Parameters\WebParamManager;

class WebRoutingStrategy extends RoutingStrategy
{
    private WebParamManager $paramManager;
    private WebRoute $route;

    public function __construct(WebRoute $route, WebParamManager $paramManager)
    {
        parent::__construct($route);
        $this->route = $route;
        $this->paramManager = $paramManager;
    }

    public function matches(): bool
    {
        if ($this->paramManager->getPath() == $this->route->getPath()) {
            return true;
        }

        return false;
    }
}
