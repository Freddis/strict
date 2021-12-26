<?php
namespace Strict\Tools\Collections;

abstract class Dictionary
{
    protected array $array = [];

    public function add(string $key, mixed $value): void
    {
        $this->array[$key] = $value;
    }

    public function get(string $key) : mixed {
        return $this->array[$key];
    }

    public function hasKey(string $key): bool
    {
        if(isset($array[$key])){
            return true;
        }
        return false;
    }
}
