<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->hasHeader('X-API-TOKEN') || $request->header('X-API-TOKEN') !== env('QR_TOKEN')) {
            return response()->json(
                [
                    'message' => 'Invalid or missing X-API-TOKEN.',
                ],
                401,
            );
        }

        return $next($request);
    }
}
