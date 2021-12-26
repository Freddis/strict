<?php declare(strict_types=1);

namespace Strict\Controllers\Parameters;

use Strict\Tools\Collections\Dictionaries\StringDictionary;

abstract class ParamManager
{
    abstract protected function getParams() : StringDictionary;

     public function getParam($name) : string {
        $params = $this->getParams();
        if(!$params->hasKey($name))
        {
            throw new \Exception("Key '$name' not found");
        }
        return $params->get($name);
    }

    public function hasParam($name) : bool {
         return $this->getParams()->hasKey($name);
    }
}
