<?php
namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;

class SmtpConfigurationService{


    public function __construct()
    {
       Mail::purge();
    }

   
    public function setCredentials($host,$port,$username,$password,$encrypt){
      $configs =  [
            "mail.mailers.smtp.host" => $host,
            "mail.mailers.smtp.port" => $port,
            "mail.mailers.smtp.username" => $username,
            "mail.mailers.smtp.password" => $password,
            "mail.mailers.smtp.encryption" => $encrypt,
            "mail.mailers.smtp.transport" => "smtp"
        ];

        foreach($configs as $key => $value){
            Config::set($key, $value);
        }
    }

}