<?php declare(strict_types=1);

namespace StrictTest\Controllers;

use Strict\Controllers\WebController;
use Strict\Model\Model;
use Strict\Views\View;
use StrictTest\Views\WebTestView;

class WebTestController extends WebController
{

    public function execute(): View
    {
        return new WebTestView();
    }

    public function createModel(): ?Model
    {
        return null;
    }
}
