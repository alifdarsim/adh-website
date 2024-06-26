<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
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
        $locale = $request->cookies->get('language');
        if ($locale) {
            $supportedLocales = config('app.locales');
            if (in_array($locale, $supportedLocales)) {
                App::setLocale($locale);
            }
        }

        return $next($request);
    }
}
