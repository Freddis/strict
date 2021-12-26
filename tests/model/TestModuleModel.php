<?php declare(strict_types=1);

namespace StrictTest\Model;

use Strict\Model\Model;
use StrictTest\Model\Modules\ITestModuleReceiver;
use StrictTest\Model\Modules\TestModule;

class TestModuleModel extends Model implements ITestModuleReceiver
{

    private ?TestModule $testModule = null;

    public function attachModule(TestModule $module): void
    {
       $this->testModule = $module;
    }

    public function getTestModule() : ?TestModule {
        return $this->testModule;
    }
}
