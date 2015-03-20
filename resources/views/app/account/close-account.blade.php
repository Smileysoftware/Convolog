@extends('app')

@section('content')

<div class="row">

    <section class="small-12 medium-12 large-12 columns">

        <h1>Close account</h1>

    </section>

</div>

<div class="row">

    <section class="small-12 medium-8 large-8 columns block">



        {!! Form::open( [ 'url' => '/account/close' , 'class' => 'forms' , 'novalidate' ]) !!}

        <p>
            Closing your account is final, all your data will be lost.
        </p>

        <p>
            If you are sure you want to close your account please enter your password below.
        </p>

        <div>
            {!! Form::label('password' , 'Enter your password for confirmation') !!}
            <p>
                {!! Form::text('password' , null , [ 'class' => 'form-element' ] ) !!}
            </p>
        </div>

        <p>
            {!! Form::submit('Close' , [ 'class' => 'button-danger' ] ) !!}
        </p>

        @include( 'partials.errors' )

        {!! Form::close() !!}

    </section>

    <section class="small-12 medium-4 large-4 columns sidebar">

        <a href="/account/change-password" class="button button-standard">Change my password</a>
        <a href="/account/close" class="button button-danger">Close my account</a>

        @include( 'partials.ad_block' )

    </section>

</div>

@stop