<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\Http\Requests;
use App\Repositories\PostRepository;
use App\Post;

class PostController extends Controller
{
    public function __construct(PostRepository $posts)
    {
        $this->middleware('auth');
        $this->posts = $posts;
    }

    public function index(Request $request)
    {
        return view('posts.index',
            ['posts' => $this->posts->forUser($request->user())]
            )->with('user', $request->user());
    }

    public function store(Request $request) {
        $this->validate($request, ['content' => 'required|max:255']);

        $request->user()->posts()->create(
            ['title' => $request->title],
            ['content' => $request->content]
        );

        return redirect('/posts');

    }

    public function destroy(Request $request, Post $post) {
        Log::info("Em posts controller:" . $post);
        $this->authorize('destroy', $post);
        $post->delete();

        return redirect('/posts');
    }


}
