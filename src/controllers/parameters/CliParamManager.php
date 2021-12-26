<?php declare(strict_types=1);

namespace Strict\Controllers\Parameters;

use Strict\Tools\Collections\Dictionaries\StringDictionary;
use Strict\Tools\Collections\Lists\StringList;

class CliParamManager extends ParamManager
{

    protected StringDictionary $params;

    public function __construct(StringList $argv)
    {
        $collection = new StringDictionary();
        foreach ($argv as $i => $arg) {
            if ($i == 0) {
                continue;
            }
            $key = (string) $i;
            $value = $arg;
            $collection->add($key,$value);
        }
        $this->params = $collection;
    }

    protected function getParams(): StringDictionary
    {
        return $this->params;
    }
}
