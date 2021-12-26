<?php declare(strict_types=1);

namespace Strict\Controllers\Routing;

use Strict\Controllers\Controller;

class CliRoute extends Route
{
    protected string $cmd;
    public function __construct(string $cmd,Controller $controller)
    {
        parent::__construct($controller);
        $this->cmd = $cmd;
    }

    public function getCmd(): string
    {
        return $this->cmd;
    }
}
