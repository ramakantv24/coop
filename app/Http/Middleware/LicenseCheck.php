<?php

// app/Http/Middleware/LicenseCheck.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class LicenseCheck
{
    public function handle($request, Closure $next)
    {
        // Only check every 24 hours
        //if (!Cache::has('license_valid')) {
            try {
                $response = Http::get('https://kumarkia.in/verify-license.php', [
                    'license_key' => config('app.license_key'),
					'domain' => $request->getHost(),
                ]);

                if ($response->json('status') !== 'valid') {
                    // License invalid - stop application
                    abort(403, 'Application disabled. Contact support.');
                }

                // Cache license validity for 24 hours
                //Cache::put('license_valid', true, now()->addDay());
            } catch (\Exception $e) {
                // Network issues, log or handle as needed
                abort(403, 'Application disabled due to verification issues.');
            }
        //}

        return $next($request);
    }
}
