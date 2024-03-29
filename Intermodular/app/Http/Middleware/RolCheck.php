<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->check())
            return redirect('login');
        $user = auth()->user();

        if ($user->isAdmin())
            return $next($request);

        if (in_array(auth()->user()->rol, $roles))
            return $next($request);
        else
            return redirect('/');

    }
}
