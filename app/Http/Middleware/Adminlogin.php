<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Adminlogin
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
        if(Auth::Check())
        {
            $user=Auth::user();
            if($user->quyen==1)
                return $next($request);
            else
                return redirect('dangnhap');
        }
        else
        {
             return redirect('dangnhap');
        }
        return $next($request);
    }
}
