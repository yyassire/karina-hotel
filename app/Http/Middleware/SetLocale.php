<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Language;
use App\Models;
use Illuminate\Support\Facades\URL;

class SetLocale
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

        app()->setLocale($request->segment(1));

        URL::defaults(['locale' => $request->segment(1)]);

        return $next($request);
    }
}
