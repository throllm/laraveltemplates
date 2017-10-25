<?php


namespace Throllm\LaravelTemplates\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class LanguageSwitcherMiddleware
{
    public function handle($request, Closure $next)
    {
        App::setLocale(session('al'));

        return $next($request);
    }
}
