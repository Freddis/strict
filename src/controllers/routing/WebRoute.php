<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\Controller;

class WebRoute extends Route
{
    protected string $path;

    public function __construct(string $path, Controller $controller)
    {
        parent::__construct($controller);
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
