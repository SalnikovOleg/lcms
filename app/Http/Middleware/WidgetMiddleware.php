<?php

namespace App\Http\Middleware;

use Closure;
use App\Widgets\Widget;

class WidgetMiddleware
{
    private $widgets;
    public function __construct(Widget $widgets)
    {
        $this->widgets = $widgets;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        $this->widgets->showWidgets();
        return $next($request);
    }
}
