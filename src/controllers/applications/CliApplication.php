<?php declare(strict_types=1);

namespace Strict\Controllers\Applications;

use Strict\Controllers\Parameters\CliParamManager;
use Strict\Controllers\Routing\CliRouter;

class CliApplication extends Application
{

    private CliRouter $router;
    private CliParamManager $params;

    public function __construct(CliParamManager $params, CliRouter $router)
    {
        $this->router = $router;
        $this->params = $params;
    }

    protected function getRouter(): CliRouter
    {
        return $this->router;
    }

    protected function getParamManager(): CliParamManager
    {
        return $this->params;
    }
}
