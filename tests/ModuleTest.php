<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Strict\Controllers\Applications\WebApplication;
use Strict\Controllers\Parameters\WebParamManager;
use Strict\Tools\Collections\Dictionaries\StringDictionary;
use StrictTest\Controllers\Routing\MockingRouter;
use StrictTest\Controllers\TestModuleController;
use StrictTest\Model\Modules\TestModule;
use StrictTest\Model\TestModuleModel;

class ModuleTest extends TestCase
{

    public function testModule() {
        $manager = new WebParamManager(StringDictionary::safeFromArray(["REQUEST_URI" => "/"]));
        $model = new TestModuleModel();
        $controller = new TestModuleController($model);
        $router = new MockingRouter($manager,$controller);
        $app = new WebApplication($manager,$router);
        $app->addModelModule(new TestModule());
        $app->run();

        $this->assertNotNull($model->getTestModule());
    }
}
