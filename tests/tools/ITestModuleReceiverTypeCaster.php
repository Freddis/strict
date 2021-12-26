<?php declare(strict_types=1);

namespace StrictTest\Tools;

use StrictTest\Model\Modules\ITestModuleReceiver;

class ITestModuleReceiverTypeCaster
{
    private mixed $object;

    public function __construct(mixed $object)
    {
        $this->object = $object;
    }

    public function hasValue(): bool
    {
        return $this->object instanceof ITestModuleReceiver;
    }

    public function getValue(): ?ITestModuleReceiver
    {
        if(!$this->hasValue()){
            return null;
        }
        return $this->object;
    }
}
