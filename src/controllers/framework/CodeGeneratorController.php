<?php declare(strict_types=1);

namespace Strict\Controllers\Framework;

use Strict\Controllers\Controller;
use Strict\Views\CliView;
use Strict\Views\View;

class CodeGeneratorController extends Controller
{

    public function execute(): View
    {
        $view = new CliView();
        $view->print("Code Generation Controller");
        return $view;
    }
}
