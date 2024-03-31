<?php

declare(strict_types=1);

namespace App\Concerns;

trait HasDefaultLevel
{
     protected function levels(): array
     {
          return [
               ['name' => 'Level One', 'number' => 1],
               ['name' => 'Level Two', 'number' => 2],
               ['name' => 'Level Three', 'number' => 3],
               ['name' => 'Level Four', 'number' => 4],
          ];
     }
}
