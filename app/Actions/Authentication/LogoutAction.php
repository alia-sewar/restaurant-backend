<?php

declare(strict_types=1);

namespace App\Actions\Authentication;

use Illuminate\Support\Facades\Auth;

final class LogoutAction
{
     public function __invoke(): void
     {
          $user = Auth::user();
          $user->currentAccessToken()->delete();
     }
}
