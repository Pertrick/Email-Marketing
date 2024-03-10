<?php

namespace App\Mail;

use App\Models\Campaign;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class CampaignMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subscriber;
    public $campaign;
    public $trackingToken;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($campaign, $subscriber,   $trackingToken)
    {
        $this->campaign = $campaign;
        $this->subscriber = $subscriber;
        $this->trackingToken = $trackingToken;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address($this->campaign->sender_email),
            replyTo:[
             new Address($this->campaign->reply_to),
            ],
            subject: $this->campaign->name,
        );

    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.campaign-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
