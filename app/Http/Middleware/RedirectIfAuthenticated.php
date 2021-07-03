<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RedirectIfAuthenticated
{
    use HasRoles; 
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     * 
     */


  

    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                // $user=Auth::user()->hasRole('admin');  
                //                 dd($user);
                // $rol= $user->getRoleNames();

                // if($user == 'admin' ){
                //     return redirect('/admin');
                // }else{
                //     // return redirect(RouteServiceProvider::HOME);
                //     dd($user);
                // }
                return redirect(RouteServiceProvider::HOME);

                
                
            }
        }

        return $next($request);
    }
}
