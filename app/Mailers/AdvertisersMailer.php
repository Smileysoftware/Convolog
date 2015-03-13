<?php namespace Convolog\Mailers;

use Config;
use Mail;

class AdvertisersMailer{

    /**
     * Send the contact email
     */
    public static function send( $data )
    {

        Mail::send('emails.advertisers', $data, function($message ) use ( $data )
        {
            $message->to( Config::get('convolog.emails_to' ) , 'The Elemental Web')->subject('Convolog - Advertisers');
        });

    }


}