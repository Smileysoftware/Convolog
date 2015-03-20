@extends( 'admin.layout' )

@section('content')

    <h1>Admin - Dashboard</h1>

    <div class="row">

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    No. Users
                    <h2>{{ $user_count }}</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    No. Companies
                    <h2>{{ $company_count }}</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    No. Conversations
                    <h2>{{ $conversation_count }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <h2>Activity</h2>

        <table class="table table-bordered table-striped table-hover tablesorter">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Zone</th>
                    <th>Note</th>
                    <th>Date</th>
                    <th>When</th>
                </tr>
            </thead>

            @foreach ( $activity as $action )

            <tr>
                @foreach ( $users as $user )

                    @if ( $user->id == $action->user_id )
                        <td><a href="/admin/users">{{ $user->name }}</a></td>
                    @endif

                @endforeach

                <td>{{ $action->zone }}</td>
                <td>{{ $action->note }}</td>
                <td>{{ $action->created_at }}</td>
                <td>{{ $action->created_at->diffForHumans() }}</td>
            </tr>

            @endforeach

        </table>

    </div>



@endsection