<?php declare(strict_types=1);

namespace Strict\Controllers\Framework;

use Strict\Controllers\Controller;
use Strict\Model\Model;
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

    public function createModel(): ?Model
    {
       return null;
    }
}
