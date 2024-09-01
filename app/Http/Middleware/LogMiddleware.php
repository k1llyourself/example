<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redis;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Redis::set('key', 'value');
        // $value = Redis::get('key');
        // info('Redis value: ' . $value);

        // info($request->url(), $request->all());

        // return $next($request);




        info($request->url(), $request->all());

        return $next($request);
    }
}
