@extends('app')

@section('content')

<div class="row">

    <section class="small-12 medium-12 large-12 columns">

        <h1>Your account</h1>

    </section>

</div>

<div class="row">

    <section class="small-12 medium-8 large-8 columns block">

        {!! Form::open( [ 'url' => '/account/update' , 'class' => 'forms' , 'novalidate' ]) !!}

        <div>
            {!! Form::label('name' , 'Update your name') !!}
            <p>
                {!! Form::text('name' , Auth::user()->name , [ 'class' => 'form-element' ] ) !!}
            </p>
        </div>

        <div>
            {!! Form::label('email' , 'Update your email address') !!}
            <p>
                {!! Form::text('email' , Auth::user()->email , [ 'class' => 'form-element' ] ) !!}
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