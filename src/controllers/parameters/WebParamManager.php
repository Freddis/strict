<?php declare(strict_types=1);

namespace Strict\Controllers\Parameters;

use Strict\Tools\Collections\Dictionaries\StringDictionary;
use Strict\Tools\Collections\Lists\StringList;

class WebParamManager extends ParamManager
{

    protected StringDictionary $params;
    protected string $path;

    public function __construct(StringDictionary $server)
    {
        $collection = new StringDictionary();
        $path = $server->get("REQUEST_URI");
        $this->path = $path;
        $this->params = $collection;
    }

    protected function getParams(): StringDictionary
    {
        return $this->params;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
