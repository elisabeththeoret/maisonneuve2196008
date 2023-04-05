<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Closure;
use Illuminate\Http\Request;

class Localization {

    /**
     * Handle an incoming request. 
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (session()->has('locale') && session()->get('locale') != 'fr') {
            App::setLocale(session()->get('locale'));
            session()->put('localeDB', '_' . session()->get('locale'));
        }
        else {
            App::setLocale('fr');
            session()->put('localeDB', '');
        }
        
        return $next($request);
    }

}
