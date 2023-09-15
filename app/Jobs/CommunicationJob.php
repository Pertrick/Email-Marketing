<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Events\CreatedCampaign;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class CommunicationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $campaign;
    private $smtp;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($campaign,$smtp)
    {
        $this->campaign = $campaign;
        $this->smtp = $smtp;
    }


    public function setSmtpConfig(){
     
        Mail::purge();

        Config::set('mail.mailers.smtp.host', $this->smtp['host']);
        Config::set('mail.mailers.smtp.port', $this->smtp['port']);
        Config::set('mail.mailers.smtp.username', $this->smtp['username']);
        Config::set('mail.mailers.smtp.password', $this->smtp['password']);
        Config::set('mail.mailers.smtp.encryption', $this->smtp['encrypt']);
        Config::set('mail.mailers.smtp.transport', 'smtp');

    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo 'Event: Campaign Created' . PHP_EOL;
        echo json_encode($this->campaign) . PHP_EOL;
        // echo json_encode($this->smtp) . PHP_EOL;

        echo json_encode($this->setSmtpConfig()). PHP_EOL;
        echo json_encode(Config::get('mail.mailers.smtp')) . PHP_EOL;


       event(new CreatedCampaign($this->campaign));
    }


}
