@extends('app')

@section('content')

<div class="row">

    <section class="small-12 medium-12 large-12 columns">

        <h1>Register</h1>

        <section class="login-form">

            {!! Form::open( [ 'url' => '/auth/register' , 'class' => 'forms register-form' , 'novalidate' ] ) !!}

            <div>
                {!! Form::label('name' , 'Name' ) !!}
                <p>
                    {!! Form::email('name',  old('name')  ) !!}
                </p>
            </div>

            <div>
                {!! Form::label('email' , 'Email Address' ) !!}
                <p>
                    {!! Form::email('email',  old('email')  ) !!}
                </p>
            </div>

            <div>
                {!! Form::label('password' , 'Enter your password' ) !!}
                <p>
                    {!! Form::password( 'password' ) !!}
                </p>
            </div>

            <div>
                {!! Form::label('password_confirmation' , 'Re-enter your password' ) !!}
                <p>
                    {!! Form::password( 'password_confirmation' ) !!}
                </p>
            </div>

            <div>
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>

            <div>
                {!! Form::submit( 'Register' ) !!}
            </div>

            <div>
                <a href="/auth/login">Already Registered?</a>
            </div>

            {!! Form::close() !!}

            @include( 'partials.errors' )

        </section>

    </section>

</div>


@endsection
