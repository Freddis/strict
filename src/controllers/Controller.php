<?php declare(strict_types=1);

namespace Strict\Controllers;

use Strict\Views\View;

abstract class Controller
{
    abstract public function execute(): View;
}
