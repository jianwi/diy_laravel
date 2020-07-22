<?php

namespace App\Http\controllers;
use App\Models\Student;
use Illuminate\Container\Container;

class WelcomController
{
    public function index()
    {
        $app = Container::getInstance();

        $factory = $app->make('view');
        return $factory->make('welcome')->with(['t'=>"test 传入的数据"]);
    }

}