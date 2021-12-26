<?php declare(strict_types=1);

namespace Strict\Model\Modules;

use Strict\Model\Model;

abstract class ModelModule
{
    abstract public function getReceiverInterface() : string;

    abstract public function attachToModel(Model $model) : void;
}
