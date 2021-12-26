<?php declare(strict_types=1);

namespace Strict\Tools\Collections\Lists;

use Strict\Model\Modules\ModelModule;

class ModelModuleList implements \Iterator
{
    protected array $list = [];
    protected int $position = 0;

    public function add(ModelModule $item)
    {
        $this->list[] = $item;
    }

    public function rewind() : void {
        $this->position = 0;
    }

    public function current() : ?ModelModule {
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
