<?php declare(strict_types=1);

namespace Strict\Views;

abstract class View
{
    abstract public function render() : string;
}
