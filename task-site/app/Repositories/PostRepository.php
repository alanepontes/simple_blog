<?php

namespace App\Repositories;

use App\User;

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
                    ->simplePaginate(2);
                    //->get();
    }
}