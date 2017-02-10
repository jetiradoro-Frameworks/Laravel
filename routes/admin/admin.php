<?php

Route::get('/',[
    'as' => 'admin',
    'uses' => 'AdminController@index'
]);