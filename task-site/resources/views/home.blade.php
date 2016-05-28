@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-body">

                <!-- Current Posts -->
                @if (count($posts) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Posts
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped post-table">
                                <!-- Table Body -->
                                <tbody>
                                    @foreach($users as $user)
                                        @foreach ($posts as $post)
                                            @if($user->id == $post->user_id)
                                                <tr>
                                                    <!-- Post Name -->
                                                    <td style = "cursor: pointer; " class="table-text" onclick="window.location='{{url("post/".$post->id)}}'">
                                                        <div class="post-heading">
                                                            <h1>{{ $post->title }}</h1>
                                                            <span class="meta">Posted by {{ $user->firstName }} {{ $user->lastName }} on {{ $post->date }}</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $posts->links() !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<hr>
<footer>
        <div class="container ">
            <div class="row">
                <p class="copyright text-muted">Copyright &copy; GoCase 2016</p>
            </div>
        </div>
</footer>

@endsection


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->



