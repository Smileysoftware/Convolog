{!! Form::open() !!}

<div class="row">

    <section class="columns">

        <h2>Add a comment</h2>

    </section>

</div>

<div class="row">

    <section class="small-12 medium-6 large-6 columns">

        {!! Form::label( 'comment_type' , 'What is happening?' ) !!}
        {!! Form::select( 'comment_type' , Config::get( 'convolog.comment_types' ) ) !!}

    </section>

    <section class="small-12 medium-6 large-6 columns">

        {!! Form::label( 'person' , 'Who did you speak to?' ) !!}
        {!! Form::text( 'person' ) !!}

    </section>

</div>

<div class="row">

    <section class="columns">

        {!! Form::label( 'comment' ) !!}
        {!! Form::textarea( 'comment' ) !!}

    </section>

    <section class="columns">

        {!! Form::submit( 'Add Comment' , [ 'class' => 'button-new' ] ) !!}
    </section>


</div>



<div class="row">

    <section class="columns">

        <div class="form-errors"></div>

    </section>

</div>

{!! Form::close() !!}