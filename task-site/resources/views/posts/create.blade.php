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
                <label for="post-title" class="col-sm-3 control-label">Title</label>
                <div class="col-sm-6">
                    <input type="text" name="title" id="post-title" class="form-control">
                </div>

                <label for="post-content" class="col-sm-3 control-label">Content</label>
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

@endsection


