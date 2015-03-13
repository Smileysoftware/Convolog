<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Convolog\Http\Requests\ContactRequest;
use Convolog\Mailers\ContactMailer;

use Convolog\Http\Requests\AdvertisersRequest;
use Convolog\Mailers\AdvertisersMailer;

class PagesController extends Controller {

    /**
     * Build the home page view
     *
     * @return \Illuminate\View\View
     */
    public function home()
	{
	    return View('home');
	}

    /**
     * Build the advertise page view
     *
     * @return \Illuminate\View\View
     */
    public function advertisers()
    {
        return view('advertisers');
    }

    /**
     * Method to send the advertisers message to me
     *
     * @param AdvertisersRequest $request
     * @param AdvertisersMailer $mailer
     * @return mixed
     */
    public function advertisers_method( AdvertisersRequest $request, AdvertisersMailer $mailer)
    {
        $data = $request->all();

        $mailer->send( $data );

        return Redirect::back()->withSuccess( 'Your message was sent' );
    }

    /**
     * Build the contact page view
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Method to send the contact message to me
     *
     * @param ContactRequest $request
     * @param ContactMailer $mailer
     * @return mixed
     */
    public function contact_method( ContactRequest $request, ContactMailer $mailer  )
    {
        $data = $request->all();

        $mailer->send( $data );

        return Redirect::back()->withSuccess( 'Your message was sent' );
    }
}
