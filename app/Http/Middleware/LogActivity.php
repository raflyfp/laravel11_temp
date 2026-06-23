<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogActivity
{
    public function handle(Request $request, Closure $next): Response
    {
        // Logika mencatat aktivitas sebelum request diproses
        if (auth()->check()) {
            Log::info('User ' . auth()->user()->email . ' mengakses: ' . $request->fullUrl());
        }

        return $next($request);
    }
}