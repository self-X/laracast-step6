<?php

namespace App\Http\Middleware;

use Closure;

class MustBeSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $plan
     * @return mixed
     */
    public function handle($request, Closure $next, $plan = null) //сколько параметром пробросили столько и тут будет
    {

        //if user is logged in AND
        //the user is currently subscribed to the site
        $user = $request->user();

        if ($user && $user->isSubscribed($plan)){
            return $next($request); //go to the next layer in a stack
        }

        return redirect('/'); //(form to subscribe maybe)

    }
}
