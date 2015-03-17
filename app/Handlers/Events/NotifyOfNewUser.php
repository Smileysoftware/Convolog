<?php namespace Convolog\Handlers\Events;

use Convolog\Events\UserRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use Mail;
use Config;

class NotifyOfNewUser implements ShouldBeQueued{

    use InteractsWithQueue;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserRegistered  $event
	 * @return void
	 */
	public function handle(UserRegistered $event)
	{

        $data['name'] = $event->user->name;
        $data['email'] = $event->user->email;
        $data['event'] = 'User Registration';

        Mail::send('emails.events.registration', $data,  function($message )
        {
            $message->to( Config::get('convolog.emails_to' ) , 'The Elemental Web')->subject('Convolog - User Registration');
        });
	}

}
