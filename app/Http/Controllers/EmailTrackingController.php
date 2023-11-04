<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CampaignSubscriber;
use App\Models\Subscriber;

class EmailTrackingController extends Controller
{
    public function index(){
        $campaigns = Campaign::with('subscribers')->latest()->paginate(15);

        $campaigns->getCollection()->transform(function ($campaign) {
            return [
                'id' => $campaign->id,
                'name' => $campaign->name,
                'sender_name' => $campaign->sender_name,
                'sender_email' => $campaign->sender_email,
                'reply_to' => $campaign->reply_to,
                'content' => $campaign->content,
                'delivery_date' => $campaign->delivery_date,
                'created_at' => $campaign->created_at,
                'updated_at' => $campaign->updated_at,
                'subscribers' => $campaign->subscribers->map(function ($subscriber) {
                    return [
                        "id" => $subscriber->id,
                        "name" => $subscriber->name,
                        "email" => $subscriber->email,
                        "company" => $subscriber->company,
                        "organization" => $subscriber->organization,
                        "phone" => $subscriber->phone,
                        "country" => $subscriber->country,
                        "mail_sent_at" => $subscriber->pivot->mail_sent_at,
                        "created_at" => $subscriber->created_at,
                        "updated_at" => $subscriber->updated_at,
                    ];
                }),
            ];
        });
        
        
     
        return response()->json([
            "data" => $campaigns,
        ], Response::HTTP_OK);

    }


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
