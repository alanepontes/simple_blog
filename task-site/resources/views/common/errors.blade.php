<!-- resources/views/common/errors.blade.php -->

@if(count($errors) > 0)
    <!-- Form eroor list-- >
    <div>
        <strong>"Whoops! Something went wrong"</strong>
        <br>
        <br>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif