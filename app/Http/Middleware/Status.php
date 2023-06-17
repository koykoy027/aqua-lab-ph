<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->status == '1') {
                return $next($request);
            } else {
                // return abort(401, 'Unauthorized action');
                return redirect('403');
            }
        } else {
            return redirect()->back()->with('message', 'Login to access the website');
        }
        return $next($request);
    }
}