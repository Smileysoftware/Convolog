@extends( 'app' )



@section('content')

<div class="row">

    <section class="small-12 medium-12 large-12 columns">

        <h1>New conversation</h1>

    </section>

</div>


<div class="row">

    <section class="small-12 medium-8 large-8 columns block">

        {!! Form::open( [ 'url' => '/conversations/create' , 'class' => 'forms conversation-form' , 'novalidate' ] ) !!}

        <div>
            {!! Form::label('title' , 'Give your conversation a title' ) !!}
            <p>
                {!! Form::text('title',  old('title') ,  [ 'placeholder' => 'Calling to talk about my problem' ]  ) !!}
            </p>
        </div>

        <div>
            {!! Form::label('company' , 'Enter the name of the company you\'re talking to' ) !!}
            <p>
                {!! Form::text('company',  old('company') , [ 'placeholder' => 'A & B Pots and Pans' ]  ) !!}
            </p>
        </div>

        <div>
            {!! Form::label('description' , 'Give a brief description of the matter in hand' ) !!}
            <p>
                {!! Form::textarea( 'description' ) !!}
            </p>
        </div>


        <div>
            {!! Form::submit( 'Start new Conversation' ) !!}
        </div>


        {!! Form::close() !!}

        @include( 'partials.errors' )

    </section>

    <section class="small-12 medium-4 large-4 columns sidebar">

        @include( 'partials.add_block' )

    </section>

</div>

@endsection