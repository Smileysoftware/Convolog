<div class="conversation-edit">

    {!! Form::open( [ 'action' => 'ConversationController@update' ] ) !!}

    {!! Form::hidden('id',  $conversation->id   ) !!}

    <p><a class="cancel-button" href="#">Cancel</a></p>

    <div>
        {!! Form::label('title' , 'Edit the title' ) !!}
        <p>
            {!! Form::text('title',  $conversation->title   ) !!}
        </p>
    </div>

    <div>
        {!! Form::label('company' , 'Change the company you\'re talking to' ) !!}
        <p>
            {!! Form::text('company',  $conversation->company ) !!}
        </p>
    </div>

    <div>
        {!! Form::label('description' , 'Give a brief description of the matter in hand' ) !!}
        <p>
            {!! Form::textarea( 'description' , $conversation->description ) !!}
        </p>
    </div>

    <div>
        {!! Form::submit( 'Update Conversation' , [ 'class' => 'button button-new' ] ) !!}
    </div>

    {!! Form::close() !!}


</div>