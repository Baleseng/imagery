<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrackingLog;

class TrackingController extends Controller
{
    public function logEvent(Request $request){

        $eventType = $request->input('event_type');
        $pageUrl = $request->input('page_url');
        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');
        $sessionId = $request->session()->getId();
        $errorReporting = $request->input('error_reporting'); // Get error reporting data

        // Find or create a tracking log for the current session and page URL
        $trackingLog = TrackingLog::firstOrCreate(
            [
                'session_id' => $sessionId,
                'page_url' => $pageUrl,
            ],
            [
                'event_type' => $eventType,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'page_views' => 0,
                'button_clicks' => 0,
                'href_clicks' => 0,
                'error_reporting' => null, // Initialize error reporting as null
            ]
        );

        // Increment the appropriate counter based on the event type
        switch ($eventType) {
            case 'page_view':
                $trackingLog->increment('page_views');
                break;
            case 'button_click':
                $trackingLog->increment('button_clicks');
                break;
            case 'href_click':
                $trackingLog->increment('href_clicks');
                break;
        }

        // Update error reporting if provided
        if ($errorReporting) {
            $trackingLog->update(['error_reporting' => $errorReporting]);
        }

        return response()->json(['message' => 'Event logged successfully'], 200);

    }
}
