<?php

namespace App\Repositories;

use App\User;
use App\Post;

class PostRepository
{
    /**
     * Get all of the posts for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->posts()
                    ->orderBy('created_at', 'asc')
                    ->simplePaginate(10);
    }

    public function allPosts() {
        return Post::orderBy('created_at', 'asc')->simplePaginate(10);
    }
}