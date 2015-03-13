@extends('app')

@section('content')

    <section class="row">

        <section class="columns">

            <h1>Contact</h1>

        </section>

    </section>

<section class="row">

    <section class="small-12 medium-6 large-6 columns advertise">
        <p>Hello</p>

        <p>
            ConvoLog is the work on just one developer.
        </p>

        <p>
            If you have an comments or suggestions or just want to say hello, that's brilliant.
        </p>
        
        <p>
            Convolog will only grow with people like you, by using it and helping it develop.
        </p>
        
        <p>
            If you have something you want to say then please feel free to fill out the form.
        </p>
        
        <p>
            If you'd like to advertise you, your product or service or company please visit the <a href="/advertisers">advertisers page</a>.
        </p>

    </section>

    <section class="small-12 medium-6 large-6 columns advertise-form">
        <h3>Talk to me</h3>

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

        @include( 'partials.errors' )

        <p>
            {!! Form::submit('Contact' , [ 'class' => 'button button-new' ] ) !!}
        </p>

        {!! Form::close() !!}

    </section>

</section>

@endsection
