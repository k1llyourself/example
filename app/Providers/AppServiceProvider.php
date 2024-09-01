<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Ділитися категоріями з усіма представленнями
        View::composer('*', function ($view) {
            $categories = [null => 'Всі категорії'] + Category::pluck('name', 'id')->toArray();
            $view->with('categories', $categories);
        });
    }
}

