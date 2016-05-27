<?php

namespace App\Policies;

use App\User;
use App\Post;
use Log;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function destroy(User $user, Post $post)
    {
        Log::info("Post - PostPolicy:" . $post);
        Log::info("User - PostPolicy:" . $post);
        return $user->id === $post->user_id;
    }
}

