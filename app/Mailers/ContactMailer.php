<?php namespace Convolog\Mailers;

use Config;
use Mail;

class ContactMailer{

    /**
     * Send the contact email
     */
    public static function send( $data )
    {

        Mail::send('emails.contact', $data, function($message ) use ( $data )
        {
            $message->to( Config::get('convolog.emails_to' ) , 'The Elemental Web')->subject('Convolog - Contact Form');
        });

    }


}