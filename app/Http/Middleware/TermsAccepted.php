<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TermsAccepted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! $request->user()->terms_accepted) {
            return redirect()->route('terms.index');
        }

        return $next($request);
    }
}
