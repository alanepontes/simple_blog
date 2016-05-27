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
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>
                                                <tr>
                                                    <!-- Post Name -->
                                                    <td class="table-text">
                                                        <div>{{ $post->title }}</div>

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
            </div>
        </div>
    </div>
</div>
@endsection
