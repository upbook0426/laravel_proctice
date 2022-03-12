<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class SetLocal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Prefix を判断して言語切替
        $route = Route::getCurrentRoute();
        $lang = $route->parameter('lang', 'ja');
        App::setLocale($lang);

        return $next($request);
    }
}
