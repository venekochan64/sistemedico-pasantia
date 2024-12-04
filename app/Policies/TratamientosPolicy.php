<?php

namespace App\Policies;

use App\Models\User;

class TratamientosPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function publish(User $user)
    {
        return $user->can('publish_post');
    }
}
