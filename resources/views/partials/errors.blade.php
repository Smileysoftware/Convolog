@if (count( $errors ) > 0)
    <div class="form-errors">

        <p>
            <strong>Whoops!</strong> Something went wrong.
        </p>

        <ul>
            @foreach ( $errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
