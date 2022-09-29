<?php

namespace App\Service;

use App\Models\User;

class UserProfileUpdate
{
    public function updateData(array $userData, User $user)
    {
        $user = $user->fill($userData);

        if ($user->saveOrFail()) {
            return true;
        }
            return  false;
    }
}
