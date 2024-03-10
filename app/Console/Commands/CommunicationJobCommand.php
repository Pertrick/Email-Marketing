<?php

namespace App\Console\Commands;

use App\Jobs\CommunicationJob;
use Illuminate\Console\Command;

class CommunicationJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'communication-job:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Communication Job Command - run command to triger communication Job';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;

        //sample data for testing communication Job
        $campaign = [
            'campaign' => [
                    "title" => 'School Mail',
                    "reply_to" => 'no-reply@gmail.com',
                    "from_name" => 'Rawlings',
                    "from_email" => 'udohpertrick@gmail.com',
                    "schedule_date" => now()->toDateTimeString(),
                    "content" => 'this is my message',
            ],
            "subscribers" => [
                [
                    'fname' =>  "Patrick",
                    'lname' => "Udoh",
                    "email" => "udohpertrick@gmail.com",
                    "phone" => '08131219734',
                    "country" => 'Nigeria'
                ],
                [
                    'fname' =>  "Patrick",
                    'lname' => "Udoh",
                    "email" => "udohpertrick@gmail.com",
                    "phone" => '08131219734',
                    "country" => 'Nigeria'
                ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ],
                // [
                //     'fname' =>  "Patrick",
                //     'lname' => "Udoh",
                //     "email" => "udohpertrick@gmail.com",
                //     "phone" => '08131219734',
                //     "country" => 'Nigeria'
                // ]
            ]
        ];

        $smtp = [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encrypt' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
            'verify_peer' => false,
        ];

        dispatch(new CommunicationJob($campaign, $smtp));
    }
}
