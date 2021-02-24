<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToLocalizedArticle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Scénario 1: Si aucune locale n'est disponible dans le path

        // Scénario 2: Si la locale est disponible mais ne correspond pas à la locale du client


        return $next($request);
    }
}
