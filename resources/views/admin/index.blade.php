@extends( 'admin.layout' )

@section('content')

    <h1>Admin - Dashboard</h1>

    <div class="row">

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    No. Users
                    <h2>{{ $users }}</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    No. Companies
                    <h2>{{ $companies }}</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    No. Conversations
                    <h2>{{ $conversations }}</h2>
                </div>
            </div>
        </div>

    </div>



@endsection