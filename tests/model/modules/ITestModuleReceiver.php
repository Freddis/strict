<?php declare(strict_types=1);

namespace StrictTest\Model\Modules;

interface ITestModuleReceiver
{
    public function attachModule(TestModule $module) : void;
}
