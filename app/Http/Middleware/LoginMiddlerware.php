<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMiddlerware
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            //Quyền của User == 1 || 2 || 3 mới được đi vào trang admin, nếu không sẽ bị đá về trang login
            $user = Auth::user();
            if ($user->roles->id_role == 1 || 2 || 3)
                return $next($request);
            else
                return redirect()->route('admin.auth.signin');

        }
        else
            return redirect()->route('admin.auth.signin');
    }
}
