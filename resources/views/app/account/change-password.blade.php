@extends('app')

@section('content')

<div class="row">

    <section class="small-12 medium-12 large-12 columns">

        <h1>Your Password</h1>

    </section>

</div>

<div class="row">

    <section class="small-12 medium-8 large-8 columns block">

        {!! Form::open( [ 'url' => '/account/change-password' , 'class' => 'forms' , 'novalidate' ]) !!}

        <div>
            {!! Form::label('old-password' , 'Enter your password') !!}
            <p>
                {!! Form::text('old-password' , null , [ 'class' => 'form-element' ] ) !!}
            </p>
        </div>

        <div>
            {!! Form::label('new-password1' , 'Choose a new password') !!}
            <p>
                {!! Form::text('new-password1' , null , [ 'class' => 'form-element' ] ) !!}
            </p>
        </div>

        <div>
            {!! Form::label('new-password2' , 'Re-enter your new password') !!}
            <p>
                {!! Form::text('new-password2' , null , [ 'class' => 'form-element' ] ) !!}
            </p>
        </div>

        <p>
            {!! Form::submit('Update' , [ 'class' => 'button-new' ] ) !!}
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