<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;

class LocationMiddleware
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
        $ip = $request->ip();
        $data = \Location::get($ip);

        if(strtolower(optional($data)->countryCode) === 'pl'){
            app()->setLocale(strtolower($data->countryCode));
        }
        else{
            app()->setLocale('en');
        }
        return $next($request);
    }
}
