<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Session\TokenMismatchException;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Add API routes or webhooks that don't need CSRF protection
        // 'api/webhook',
    ];
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Skip CSRF check for excluded routes
        if ($this->inExceptArray($request)) {
            return $next($request);
        }

        try {
            return parent::handle($request, $next);
        } catch (TokenMismatchException $e) {
            // Different handling for AJAX requests
            if ($request->expectsJson()) {
                Auth::logout();
                Session::forget('user');
                return response()->json([
                    'message' => 'Session expired. Please refresh the page.',
                    'redirect' => route('login')
                ], 419);
            }

            // For regular web requests
            return redirect()
                ->route('login')
                ->withInput($request->except('password', '_token'))
                ->with('error', 'Your session has expired. Please log in again.');
        }
    }
    
}