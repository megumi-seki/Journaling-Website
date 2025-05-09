<?php

namespace App\Policies;

use App\Models\Content;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ContentPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user, Content $content)
    {
        return $user->id === $content->user_id ? Response::allow()
            : Response::denyWithStatus(404);
    }

    public function update(User $user, Content $content)
    {
        return $user->id === $content->user_id ? Response::allow()
            : Response::denyWithStatus(404);
    }

    public function destroy(User $user, Content $content)
    {
        return $user->id === $content->user_id ? Response::allow()
            : Response::denyWithStatus(404);
    }
    
    public function restoreTag(User $user, Content $content)
    {
        return $user->id === $content->user_id ? Response::allow()
            : Response::denyWithStatus(404);
    }
}
