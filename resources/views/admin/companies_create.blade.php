@extends( 'admin.layout' )

@section('content')

    <h1>Create Company</h1>


    {!! Form::open() !!}
    <p>
        {!! Form::label('name' , 'What is the company name?' ) !!}
        {!! Form::text('name', null , [ 'class' => 'form-control' ] ) !!}
    </p>

    <p>
        {!! Form::submit('Create Company' , [ 'class' => 'btn btn-primary' ] ) !!}
    </p>

    {!! Form::close() !!}



@endsection