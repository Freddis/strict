<?php declare(strict_types=1);

namespace Strict\Controllers\Applications;

use Strict\Controllers\Controller;
use Strict\Controllers\Parameters\ParamManager;
use Strict\Controllers\Routing\Router;
use Strict\Model\Modules\ModelModule;
use Strict\Tools\Collections\Lists\ModelModuleList;
use Strict\Views\View;

abstract class Application
{
    protected ModelModuleList $modelModules;

    public function __construct()
    {
        $this->modelModules = new ModelModuleList();
    }

    abstract protected function getRouter(): Router;

    abstract protected function getParamManager(): ParamManager;

    public function run(): View
    {
        $router = $this->getRouter();
        $route = $router->findRoute();
        $controller = $route->getController();
        $this->attachModelModules($controller);
        return $controller->execute();
    }

    public function addModelModule(ModelModule $module)
    {
        $this->modelModules->add($module);
    }

    protected function attachModelModules(Controller $controller)
    {
        foreach ($this->modelModules as $module) {
            $interface = $module->getReceiverInterface();
            if (!interface_exists($interface)) {
                throw new \Exception("Interface '$interface' doesn't exist");
            }
            $model = $controller->createModel();
            $hasInterface = $model instanceof $interface;
            if (!$hasInterface) {
                continue;
            }
            $module->attachToModel($model);
        }
    }
}
