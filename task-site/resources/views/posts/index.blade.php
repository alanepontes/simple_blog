<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Post Form -->
        <form action="{{ url('post') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Post Content -->
            <div class="form-group">
                <label for="post-content" class="col-sm-3 control-label">Post</label>

                <div class="col-sm-6">
                    <input type="text" name="content" id="post-content" class="form-control">
                </div>
            </div>

            <!-- Add Post Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> New Post
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current Posts -->
    @if (count($posts) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Posts
            </div>

            <div class="panel-body">
                <table class="table table-striped post-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Post</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <tr>
                                        <!-- Post Name -->
                                        <td class="table-text">
                                            <div>{{ $post->content }}</div>
                                            <div>{{ $post->user_id }}</div>
                                            <div>{{ $user->id }}</div>

                                        </td>

                                        <!-- Delete Button -->
                                        <td>
                                            <form action="{{ url('post/'.$post->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">

                                                <button type="submit" id="delete-post-{{ $post->id }}" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection