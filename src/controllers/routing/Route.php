<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\Controller;

abstract class Route
{

    private Controller $controller;

    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    public function getController(): Controller
    {
        return $this->controller;
    }
}
