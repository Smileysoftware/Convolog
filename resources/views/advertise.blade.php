@extends('site')

@section('content')

    <section class="row">

        <section class="columns">

            <h1>Interesting in advertising on ConvoLog?</h1>

        </section>

    </section>

<section class="row">

    <section class="small-12 medium-6 large-6 columns advertise">
        <p>We're currently offering very reasonable introductory rates.</p>

        <p>
            Because the website is so new we'll be almost giving away advertising space.
        </p>

        <p>
            Contact us using the form to see how you can advertise your compnay, products or services on ConvoLog
        </p>

    </section>

    <section class="small-12 medium-6 large-6 columns advertise-form">
        <h3>Talk to us</h3>

        {!! Form::open() !!}

        <p>
            {!! Form::label( 'name' , 'Your Name' ) !!}
            {!! Form::text('name' , old('name') ) !!}
        </p>

        <p>
            {!! Form::label( 'email' , 'Your Contact Email Address' ) !!}
            {!! Form::text('email' , old('email') ) !!}
        </p>

        <p>
            {!! Form::label( 'company' , 'Your Company Name' ) !!}
            {!! Form::text('company' , old('company') ) !!}
        </p>

        <p>
            {!! Form::label( 'talk' , 'Tell us why you\'d like to advertise with Convolog' ) !!}
            {!! Form::textarea('talk' , old('talk') ) !!}
        </p>

        <p>
            {!! Form::submit('Advertise' , [ 'class' => 'button button-new' ] ) !!}
        </p>

        {!! Form::close() !!}

    </section>

</section>

@endsection
