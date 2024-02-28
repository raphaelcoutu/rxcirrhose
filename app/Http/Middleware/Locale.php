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
        $session = $request->getSession();

        if (!$session->has(self::SESSION_KEY)) {
            $session->set(self::SESSION_KEY, $request->getPreferredLanguage(self::LOCALES));
        }

        if ($request->has('lang')) {
            $lang = $request->get('lang');
            if (in_array($lang, self::LOCALES)) {
                $session->set(self::SESSION_KEY, $lang);
            }
        }

        app()->setLocale($session->get(self::SESSION_KEY));

        return $next($request);
    }
}
