<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    {
        //
    }

    public function subscribe(string $email, string $list=null)
    {  
        $list ??= config('services.mailchimp.lsits.subscribers');        

        return $this->client->lists->addListMember(config('services.mailchimp.lsits.subscribers'), [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }
}