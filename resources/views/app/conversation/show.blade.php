@extends( 'app' )



@section('content')

<div class="row">

    <section class="small-12 medium-12 large-12 columns">

        <h1>{{ $conversation->company }}</h1>

    </section>

</div>


<div class="row">

    <section class="small-12 medium-8 large-8 columns">

        <div class="description">
            <h2>The reason for the call</h2>
            {{ $conversation->description }}
        </div>

        @if ( $conversation->comments )

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