<?php

$app['router']->get('/','App\Http\Controllers\WelcomController@index');

$app['router']->get('/controller','App\Http\Controllers\WelcomController@index');