<?php declare(strict_types=1);

namespace Strict\Tools\Collections\Dictionaries;


class StringDictionary
{
    protected array $array = [];

    /**
     * @throws \Exception
     */
    public static function fromArray(array $strings): self
    {
        $list = new StringDictionary();
        foreach ($strings as $key => $string) {
            if (!is_string($string)) {
                throw new \Exception("Value '$string' is not a string");
            }
            if (!is_string($string)) {
                throw new \Exception("Key '$key' is not a string");
            }
            $list->add($key,$string);
        }
        return $list;
    }

    public static function safeFromArray(array $strings): self
    {
        try {
            return static::fromArray($strings);
        } catch (\Throwable) {
        }
        return new self();
    }

    public function add(string $key, string $value): void
    {
        $this->array[$key] = $value;
    }

    public function get(string $key) : string {
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
