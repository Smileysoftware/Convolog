@extends( 'app' )

@section('content')

<section class="big-block">

    <section class="row">


        <h1>Whoa a big old error happened</h1>

        <h2>
            It's all broken!
        </h2>


    </section>

</section>

<section class="row">

    <section class="columns">

        <p><br/>
            So, something has gone terribly wrong. That's a bit sad but don't worry we'll have you back on track in a jiffy!
        </p>

        @if ( Auth::guest() )

        <p>
            Why not go back to the home page?
            <br/><br/>
        </p>
        <p>
            <a href="/" class="button button-new">Go home, its the safest bet!</a>
        </p>

        @else

        <p>
            Why not go and view all your conversations?
            <br/><br/>
        </p>
        <p>
            <a href="/conversations" class="button button-new">View my conversations</a>
        </p>

        @endif

    </section>




</section>

@endsection