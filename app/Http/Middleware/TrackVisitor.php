<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Only log public GET HTML requests, skip admin and assets
        if (
            $request->isMethod('get') &&
            !$request->is('admin*') &&
            !$request->is('favicon.*') &&
            !$request->is('robots.txt') &&
            !$request->is('sitemap.xml') &&
            !str_starts_with($request->path(), 'public/') &&
            str_contains($request->header('accept', 'text/html'), 'text/html')
        ) {
            try {
                $ip = $request->ip();
                $ua = $request->userAgent() ?? '';
                // Skip private/local addresses and bots
                if ($ip && !$this->isPrivateIp($ip) && !$this->isBot($ua)) {
                    $geo = Cache::remember("geoip:".$ip, now()->addHours(24), function () use ($ip) {
                        $resp = Http::timeout(3)->retry(1, 100)->get("https://ipwho.is/{$ip}");
                        if ($resp->ok() && ($resp['success'] ?? false)) {
                            return [
                                'lat' => (float)($resp['latitude'] ?? 0),
                                'lng' => (float)($resp['longitude'] ?? 0),
                                'country' => $resp['country'] ?? null,
                                'city' => $resp['city'] ?? null,
                            ];
                        }
                        return null;
                    });

                    $props = [
                        'ip' => $ip,
                        'user_agent' => $ua,
                        'url' => $request->fullUrl(),
                        'referrer' => $request->headers->get('referer'),
                    ];
                    if (is_array($geo)) {
                        $props = array_merge($props, [
                            'latitude' => $geo['lat'],
                            'longitude' => $geo['lng'],
                            'country' => $geo['country'],
                            'city' => $geo['city'],
                        ]);
                    }

                    // Log as visitor without user context
                    if (function_exists('activity')) {
                        activity()
                            ->useLog('visitor')
                            ->withProperties($props)
                            ->log('Page View');
                    }
                }
            } catch (\Throwable $e) {
                // Swallow errors to avoid impacting request flow
            }
        }

        return $next($request);
    }

    private function isPrivateIp(string $ip): bool
    {
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
            return true;
        }
        return false;
    }

    private function isBot(string $ua): bool
    {
        $ua = strtolower($ua);
        foreach (['bot', 'crawler', 'spider', 'curl', 'wget', 'httpclient'] as $needle) {
            if ($ua && str_contains($ua, $needle)) return true;
        }
        return false;
    }
}


