<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user)
    {
        return $user->access_level < 2;
    }
    public function create(User $user)
    {
        return $user->access_level === 0;
    }
    public function delete(User $user)
    {
        return $user->access_level === 0;
    }
}
