<?php namespace Convolog\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class Admin {

    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        //If the user is a guest redirect to login
        if ($this->auth->guest())
        {
           return redirect()->guest('auth/login');
        }

        //If the user is not and admin the go to login
        if ( ! Auth::user()->admin )
        {
            return redirect()->guest('auth/login');
        }

		return $next($request);
	}

}
