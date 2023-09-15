<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Events\CreatedCampaign;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\SmtpConfigurationService;
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

   /**
     * set Smtp Config.
     *
     * @return void
     */

    public function setSmtpConfig(){

        (new SmtpConfigurationService())
        ->setCredentials(
            $this->smtp['host'],
            $this->smtp['port'],
            $this->smtp['username'],
            $this->smtp['password'],
            $this->smtp['encrypt']
        );

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
        echo json_encode(Config::get('mail.mailers.smtp')) . PHP_EOL;

        $this->setSmtpConfig();
       event(new CreatedCampaign($this->campaign));
    }


}
