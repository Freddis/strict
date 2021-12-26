<?php declare(strict_types=1);

namespace Strict\Controllers;

use Strict\Model\Model;
use Strict\Views\View;

abstract class Controller
{
    abstract public function execute(): View;

    abstract public function createModel(): ?Model;
}
