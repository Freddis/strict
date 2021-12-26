<?php declare(strict_types=1);

namespace Strict\Controllers;

use Strict\Model\Model;
use Strict\Views\CliView;
use Strict\Views\View;

class DefaultCliController extends Controller
{

    public function execute(): View
    {
        $view = new CliView();
        $view->print('The list of commands:');
        return $view;
    }

    public function createModel(): ?Model
    {
        return null;
    }
}
