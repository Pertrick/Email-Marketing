<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampaignSubscriber;

class EmailTrackingController extends Controller
{
    public function trackEmailOpen(Request $request, $campaign_id, $token)
    {
        // Find the recipient associated with the email ID (you'll need to implement this logic)
        $campaignSubscriber = CampaignSubscriber::where('campaign_id', $campaign_id)
            ->where('tracking_token', $token)
            ->first();

        if (empty($campaignSubscriber)) {
            return abort(404);
        }

        $campaignSubscriber->update(['opened_at' => now()]);
        // Return a transparent 1x1 pixel image
        $pixel = base64_decode('R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=');
        return response($pixel)->header('Content-Type', 'image/gif');
    }
}
