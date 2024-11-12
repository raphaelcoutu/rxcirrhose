<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Locale
{
    const SESSION_KEY = 'locale';
    const LOCALES = ['en', 'fr'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->has('hl') || !in_array($request->get('hl'), self::LOCALES)) {
            return redirect($request->fullUrlWithQuery(['hl' => 'fr']));
        }

        app()->setLocale($request->get('hl'));

        return $next($request);
    }
}
