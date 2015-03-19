@extends( 'admin.layout' )

@section('content')

<h1>All Companies <a href="/admin/companies/create" class="btn btn-primary btn-small pull-right">Create Company</a></h1>


<table class="table table-bordered table-striped table-hover tablesorter">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Created</th>
        </tr>
    </thead>
    @foreach ( $companies as $company )

    <tr>
        <td>{{ $company->id }}</td>
        <td>{{ $company->name }}</td>
        <td>{{ $company->created_at }}</td>

    </tr>

    @endforeach

</table>

@endsection