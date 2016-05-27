@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Simple Post
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped post-table">
                            <!-- Table Body -->
                            <tbody>
                                <tr>
                                    <!-- Post Name -->
                                    <td style = "cursor: pointer; " class="table-text" onclick="window.location='{{url("post/".$post->id)}}'">
                                        <div class="post-heading">
                                            <h1>{{ $post->title }}</h1>
                                            <span class="meta">Posted by {{ $user->firstName }} {{ $user->lastName }} on {{ $post->date }}</span>
                                            <hr>

                                            <span class="meta">{{ $post->content }}</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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

