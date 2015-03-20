<?php namespace Convolog\Http\Middleware;

use Closure;

class devmode {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

        if( \Auth::user()->admin ){
            \Config::set('app.debug' , true);
        }

		return $next($request);
	}

}
