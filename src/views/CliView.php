<?php declare(strict_types=1);

namespace Strict\Views;

use Strict\Tools\Collections\Lists\StringList;

class CliView extends View
{

    private StringList $data;

    public function __construct()
    {
        $this->data = new StringList();
    }

    public function print(string $string)
    {
        echo $string;
        $this->data->add($string);
    }

    public function render(): string
    {
        return $this->data->join("\n");
    }
}
