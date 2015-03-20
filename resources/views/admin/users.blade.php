@extends( 'admin.layout' )

@section('content')

<h1>All Users</h1>

<table class="table table-bordered table-striped table-hover tablesorter">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registered</th>
            <th>Admin?</th>
        </tr>
    </thead>
    @foreach ( $users as $user )

        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>

            @if ( $user->admin == 1 )
                <td>True</td>
            @else
                <td>False</td>
            @endif

        </tr>

    @endforeach

</table>

@endsection