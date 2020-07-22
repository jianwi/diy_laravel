<?php

namespace App\Http\controllers;
use App\Models\Student;

class WelcomController
{
    public function index()
    {
        $a = Student::all();
        dump($a);
        return '控制器成功';
    }

}