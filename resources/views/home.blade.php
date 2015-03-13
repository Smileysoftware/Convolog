@extends('app')

@section('content')

    <section class="big-block">

        <section class="row">

            <section class="small-12 medium-6 large-6 columns">

                <h1>Don't loose it, log it!</h1>

                <h2>Never forget who you spoke to or what was said ever again!</h2>

            </section>

            <section class="small-12 medium-6 large-6 columns">

                <p>
                    ConvoLog was designed for you to log your experiences with the myriad of companies you need to deal with on a daily basis.
                </p>

                @if ( Auth::guest() )

                    <a href="/auth/register" class="button-ghost">Register Now It's Free Forever!</a>

                @else

                <br/><h3>You've already registered, I love you a little bit.</h3>

                @endif

            </section>

        </section>


    </section>

@endsection
