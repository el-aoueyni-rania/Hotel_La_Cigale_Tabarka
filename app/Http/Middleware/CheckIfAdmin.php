<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Closure;


use Closure;
use Illuminate\Support\Facades\Auth;


class CheckIfAdmin
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


        if(Auth::user()->Admin)
        {
            return redirect('welcome');


        if(!Auth::user()->admin){
            return redirect('home');

        }
        return $next($request);
    }
}
