@extends( 'app' )



@section('content')

<div class="row">

    <section class="small-12 medium-12 large-12 columns js-title">

        <h1>{{ $conversation->title }}</h1>

    </section>

</div>


<div class="row">

    <section class="small-12 medium-8 large-8 columns">

        <div class="description">
            <h2>The reason for the conversation</h2>
            {{ $conversation->description }}
            <p><input type="button" value="Edit" class="edit-button"/></p>
        </div>

        <div class="conversation-edit">

            {!! Form::open( [ 'action' => 'ConversationController@update' ] ) !!}

            {!! Form::hidden('id',  $conversation->id   ) !!}

            <a class="cancel-button" href="#">Cancel</a>

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

        @if ( count( $conversation->comments ) > 0 )

            <div class="comments">

                @foreach( $conversation->comments as $comment )

                    <div class="comment">

                        <div class="comment-title">
                            <h3>
                                <img src="/images/result/{{ $comment->result }}.svg" alt="Result"/> New Conversation Started
                            </h3>
                            <span>
                                {{ $comment->created_at }}
                            </span>
                        </div>

                        {{ $comment->comment }}


                    </div>

                @endforeach

            </div>

        @else

            <div class="comments">

                <h2>You have no comments yet</h2>
                <p>Better comment about something!</p>

            </div>

        @endif

    </section>

    <section class="small-12 medium-4 large-4 columns sidebar">

        <a href="/conversations/{{ $conversation->id }}/comment" class="button button-new">Add a comment</a>
        <a href="/conversations/create" class="button button-standard">Start a new conversation</a>
        <a href="/conversation/{{ $conversation->id }}/close" class="button button-standard">close this conversation</a>
        <a href="/conversations/{{ $conversation->id }}/email" class="button button-standard">email this conversation</a>
        <a href="/conversations/{{ $conversation->id }}/delete" class="button button-danger">delete this conversation</a>

        @include( 'partials.add_block' )

    </section>

</div>

@endsection