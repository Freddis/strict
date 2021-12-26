<?php declare(strict_types=1);

namespace StrictTest\Model\Modules;

use Strict\Model\Model;
use Strict\Model\Modules\ModelModule;
use StrictTest\Tools\ITestModuleReceiverTypeCaster;

class TestModule extends ModelModule
{
    public function getReceiverInterface(): string
    {
       return ITestModuleReceiver::class;
    }

    public function attachToModel(Model $model): void
    {
        $caster = new ITestModuleReceiverTypeCaster($model);
        if(!$caster->hasValue()){
            return;
        }
        $caster->getValue()->attachModule($this);
    }
}
