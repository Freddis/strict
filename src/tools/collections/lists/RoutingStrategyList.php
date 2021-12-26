<?php declare(strict_types=1);

namespace Strict\Tools\Collections\Lists;

use Strict\Controllers\Routing\RoutingStrategy;

class RoutingStrategyList implements \Iterator
{
    protected array $list = [];
    protected int $position = 0;

    public function add(RoutingStrategy $item)
    {
        $this->list[] = $item;
    }

    public function rewind() : void {
        $this->position = 0;
    }

    public function current() : ?RoutingStrategy {
        return $this->list[$this->position];
    }

    public function key() : int {
        return $this->position;
    }

    public function next() : void {
        ++$this->position;
    }

    public function valid() : bool {
        return isset($this->list[$this->position]);
    }
}
