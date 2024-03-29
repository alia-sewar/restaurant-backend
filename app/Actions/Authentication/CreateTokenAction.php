<?php

declare(strict_types=1);

namespace App\Actions\Authentication;

use App\Models\User;

final class CreateTokenAction
{
    public function __invoke(User $user)
    {
        $user['token'] = $user->createToken('user-auth')->plainTextToken;

        return $user;
    }
}
