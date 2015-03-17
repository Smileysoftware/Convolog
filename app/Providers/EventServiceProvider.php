<?php namespace Convolog\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use Convolog\Events\UserRegistered;
use Convolog\Handlers\Events\NotifyOfNewUser;

use Convolog\Events\UserLogin;
use Convolog\Handlers\Events\NotifyOfUserLogin;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
        'event.name' => [
            'EventListener',
        ],

        UserRegistered::class => [
            NotifyOfNewUser::class,
        ],

        UserLogin::class => [
            NotifyOfUserLogin::class,
        ]

	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		//
	}

}
