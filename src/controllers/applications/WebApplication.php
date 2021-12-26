<?php declare(strict_types=1);

namespace Strict\Controllers\Applications;

use Strict\Controllers\Parameters\WebParamManager;
use Strict\Controllers\Routing\WebRouter;

class WebApplication extends Application
{

    private WebRouter $router;
    private WebParamManager $params;

    public function __construct(WebParamManager $params, WebRouter $router)
    {
        $this->router = $router;
        $this->params = $params;
    }

    protected function getRouter(): WebRouter
    {
        return $this->router;
    }

    protected function getParamManager(): WebParamManager
    {
        return $this->params;
    }
}
