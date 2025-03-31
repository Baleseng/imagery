<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\TrackingLog;

class TrackPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($request->isMethod('get')) {
            $pageUrl = $request->fullUrl();
            $ipAddress = $request->ip();
            $userAgent = $request->header('User-Agent');
            $sessionId = $request->session()->getId();

            // Find or create a tracking log for the current session and page URL
            $trackingLog = TrackingLog::firstOrCreate(
                [
                    'session_id' => $sessionId,
                    'page_url' => $pageUrl,
                ],
                [
                    'event_type' => 'page_view',
                    'ip_address' => $ipAddress,
                    'user_agent' => $userAgent,
                    'page_views' => 0,
                    'button_clicks' => 0,
                    'href_clicks' => 0,
                    'error_reporting' => null,
                ]
            );

            // Increment the page views counter
            $trackingLog->increment('page_views');

            // Log errors if any
            if ($response->status() >= 400) {
                $trackingLog->update([
                    'error_reporting' => 'HTTP Error: ' . $response->status(),
                ]);
            }
        }

        return $response;
    }
}
