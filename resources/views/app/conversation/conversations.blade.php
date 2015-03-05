@extends( 'app' )



@section('content')

    <div class="row">

        <section class="small-12 medium-12 large-12 columns">

            <h1>Your conversations</h1>

        </section>

    </div>


    <div class="row">

        <section class="small-12 medium-8 large-8 columns block">

            @if ( count( $conversations ) > 0 )

                @foreach ( $conversations as $conversation )

                    <div class="conversation">
                        <h2>{{ $conversation->company }}</h2>
                        <strong>Last update {{ $conversation->updated_at }}</strong>
                        <p>{{ $conversation->description }}</p>
                        <a href="/conversations/{{ $conversation->id }}" class="button button_view_conversation">View</a>
                    </div>

                @endforeach

            @else

                <h2>
                    You don't have any conversations yet
                </h2>
                <p>Why not add a new conversation?</p>

            @endif

        </section>

        <section class="small-12 medium-4 large-4 columns sidebar">

            <a href="/conversations/create" class="button button-new">Start a new conversation</a>

        </section>

    </div>

@endsection