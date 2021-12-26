<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\Parameters\CliParamManager;

class CliRoutingStrategy extends RoutingStrategy
{
    private CliParamManager $paramManager;
    private CliRoute $route;

    public function __construct(CliRoute $route, CliParamManager $paramManager)
    {
        parent::__construct($route);
        $this->route = $route;
        $this->paramManager = $paramManager;
    }

    public function matches(): bool
    {
        if (!$this->paramManager->hasParam("cmd")) {
            return false;
        }

        if ($this->route->getCmd() == $this->paramManager->getParam("cmd")) {
            return true;
        }
        return false;
    }
}
