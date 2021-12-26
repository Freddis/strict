<?php

namespace StrictTest\Controllers;

use Strict\Controllers\Controller;
use Strict\Model\Model;
use Strict\Views\View;
use StrictTest\Views\WebTestView;

class TestModuleController extends Controller
{

    private Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function execute(): View
    {
        return new WebTestView();
    }


    public function createModel(): Model
    {
       return $this->model;
    }
}
