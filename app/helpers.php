<?php
namespace App\Providers;
use Illuminate\Support\Facades\Route;


if (! function_exists('test')){
    function test()
    {
        return app('test');
    }
}


if (! function_exists('activelink')){
    function activelink(string $name, string $active = 'active'): string
    {
        return Route::is($name) ? $active : '';
    }
}