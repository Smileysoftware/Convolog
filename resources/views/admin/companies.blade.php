@extends( 'admin.layout' )

@section('content')

<h1>All Companies</h1>


<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Created</th>
    </tr>
    @foreach ( $companies as $company )

    <tr>
        <td>{{ $company->id }}</td>
        <td>{{ $company->name }}</td>
        <td>{{ $company->created_at }}</td>

    </tr>

    @endforeach

</table>

@endsection