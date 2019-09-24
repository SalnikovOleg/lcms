<?php

namespace App\Http\Middleware;

use Closure;
use Request;
use App;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private static $mainLanguage = 'ru';
    private static $languages = ['ru', 'ua', 'en'];

    public static function  getLocale() 
    {
        $urlSegments = explode('/', Request::path());
        if(isset($urlSegments[0]) && $urlSegments[0] != self::$mainLanguage
            && in_array($urlSegments[0], self::$languages)) {
            return $urlSegments[0];
        }
        return null; 
    }

    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();
        if ($locale)  App::setLocale($locale);
        else  App::setLocale(self::$mainLanguage);

        return $next($request);
    }
}
