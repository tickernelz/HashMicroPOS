<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class IsInstalled
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
        $envPath = base_path('.env');
        if (! file_exists($envPath)) {
            // Show message
            echo 'Please set up your .env file.';
            exit;
        } else {
		//bugs
        }

        return $next($request);
    }
}
