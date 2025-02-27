<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\PageStat;

class TrackController extends Controller
{
    public function trackView(Request $request)
    {
        // Validate the request
        $request->validate([
            'page_url' => 'required|string',
        ]);

        // Find or create a record for the page URL
        $pageStat = PageStat::firstOrCreate(
            ['page_url' => $request->input('page_url')],
            ['view_count' => 0, 'click_count' => 0]
        );

        // Increment the view count
        $pageStat->increment('view_count');

        Track::create([
            'event_type' => 'view',
            'page_url' => $request->input('page_url'),
        ]);
        return response()->json(['status' => 'success']);
    }

    public function trackClick(Request $request)
    {
        // Validate the request
        $request->validate([
            'page_url' => 'required|string',
        ]);

        // Find or create a record for the page URL
        $pageStat = PageStat::firstOrCreate(
            ['page_url' => $request->input('page_url')],
            ['view_count' => 0, 'click_count' => 0]
        );

        // Increment the click count
        $pageStat->increment('click_count');
        
        Track::create([
            'event_type' => 'click',
            'page_url' => $request->input('page_url'),
            'button_id' => $request->input('button_id'),
        ]);
        return response()->json(['status' => 'success']);
    }
}
