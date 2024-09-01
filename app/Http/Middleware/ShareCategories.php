<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShareCategories
{
    private $categories = [
        null => 'Всі категорії',
        1 => 'Категорія 1',
        2 => 'Категорія 2',
        3 => 'Категорія 3',
        // Додайте інші категорії тут
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        view()->share('categories', $this->categories);
        return $next($request);
    }
}
