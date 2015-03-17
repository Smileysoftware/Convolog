<?php namespace Convolog\Events;

use Convolog\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserRegistered extends Event {

	use SerializesModels;

    public $user;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct( $user )
	{
		$this->user = $user;
	}

}
