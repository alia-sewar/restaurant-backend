<?php

declare(strict_types=1);

namespace App\Concerns;

trait HasDefaultAdmin
{
     protected function admin(): array
     {
          return [
               'name'         =>  'Admin',
               'email'        =>  'admin@app.com',
               'password'     =>  '12345678'
          ];
     }
}
