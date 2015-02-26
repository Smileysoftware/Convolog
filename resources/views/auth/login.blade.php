@extends('app')

@section('content')



	<div class="row">

        <section class="small-12 medium-12 large-12 columns">

            <h1>Login</h1>

            <section class="login-form">

                {!! Form::open( [ 'url' => '/auth/login' , 'class' => 'forms login-form' , 'novalidate' ] ) !!}

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
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

                <div>
                    {!! Form::submit( 'Login' ) !!}
                </div>

                <div>
                    <a href="/password/email">Forgot Your Password?</a>
                </div>

                {!! Form::close() !!}

                @include( 'partials.errors' )

            </section>

        </section>

    </div>

@endsection