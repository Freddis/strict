<?php declare(strict_types=1);

namespace Strict\Tools\Collections\Lists;

class StringList implements \Iterator
{
    protected array $list = [];
    protected int $position = 0;

    /**
     * @throws \Exception
     */
    public static function fromArray(array $strings): StringList
    {
        $list = new StringList();
        foreach ($strings as $i => $string) {
            if (!is_string($string)) {
                throw new \Exception("Element '$i' is not a string");
            }
            $list->add($string);
        }
        return $list;
    }

    public static function safeFromArray(array $strings): StringList
    {
        try {
            return static::fromArray($strings);
        } catch (\Throwable) {
        }
        return new StringList();
    }


    public function join(string $separator): string
    {
        $result = "";
        foreach ($this as $i => $value) {
            if ($i > 0) {
                $result .= $separator;
            }
            $result .= $value;
        }
        return $result;
    }

    public function add(string $string)
    {
        $this->list[] = $string;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function current(): ?string
    {
        return $this->list[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->list[$this->position]);
    }
}
