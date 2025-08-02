<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class CustomerMiddleware
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
        if(Auth::user()->role == 'customer'){
     		return $next($request);
		}elseif(!empty(Auth::user()->role)){
			if(Auth::user()->role=='admin'){
			    return redirect('admin/dashboard');
			}elseif(Auth::user()->role=='cooperative'){
				return redirect('cooperative/dashboard');
			}
		}else{
		   dd('you can access only that things..');
		}
    } 
}