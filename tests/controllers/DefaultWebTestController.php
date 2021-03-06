<?php declare(strict_types=1);

namespace StrictTest\Controllers;

use Strict\Controllers\WebController;
use Strict\Views\View;
use StrictTest\Views\DefaultWebTestView;

class DefaultWebTestController extends WebController
{

    public function execute(): View
    {
        return new DefaultWebTestView();
    }
}
