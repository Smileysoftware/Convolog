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
            {{ $conversation->description }}
        </div>

        @if ( $conversation->comments )

        <div class="comments block">

            @foreach( $conversation->comments as $comment )

                <p class="comment">

                    {{ $comment->comment }}

                </p>

            @endforeach

        </div>

        @endif

    </section>

    <section class="small-12 medium-4 large-4 columns sidebar">

        @include( 'partials.add_block' )

    </section>

</div>

@endsection