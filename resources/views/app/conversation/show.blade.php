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

        @include( 'app.conversation.partials.edit_conversation_form ' )

        @if ( count( $conversation->comments ) > 0 )

            <div class="comments">

                @foreach( $conversation->comments as $comment )

                    <div class="comment">

                        <div class="comment-title">
                            <h3>
                                {{ $comment_types[ $comment->comment_type ] }}
                            </h3>
                            <span>
                                {{ $comment->created_at }}
                            </span>
                        </div>

                        <div class="comment-body">
                            {{ $comment->comment }}

                            @if ( $comment->person )
                                <p class="person">Spoke to <strong>{{ $comment->person }}</strong></p>
                            @endif
                        </div>

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

        <a href="#" class="button button-new add_comment">Add a comment</a>
        <a href="/conversations/create" class="button button-standard">Start a new conversation</a>
        <a href="/conversation/{{ $conversation->id }}/close" class="button button-standard">close this conversation</a>
        <a href="/conversations/{{ $conversation->id }}/email" class="button button-standard">email this conversation</a>
        <a href="/conversations/{{ $conversation->id }}/delete" class="button button-danger">delete this conversation</a>

        @include( 'partials.add_block' )

    </section>

</div>

@endsection

@section('comment_modal')
    @include( 'app.conversation.partials.add_comment_form' )
@endsection