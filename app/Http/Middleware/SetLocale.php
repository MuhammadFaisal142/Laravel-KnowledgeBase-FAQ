<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // if (request('change_language')) {
        //     session()->put('locale', request('change_language'));
        //     $language = request('change_language');
        // } elseif (session('locale')) {
        //     $language = session('locale');
        // } elseif (config('panel.primary_language')) {
        //     $language = config('panel.primary_language');
        // }

        // if (isset($language)) {
        //     app()->setLocale($language);
        // }

        if(Session::has('locale')){
            App::setlocale(Session::get('locale'));
        }
        return $next($request);
    }

}
