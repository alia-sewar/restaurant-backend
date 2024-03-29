<?php

namespace Database\Seeders;

use App\Concerns\HasDefaultAdmin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    use HasDefaultAdmin;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create($this->admin());
    }
}
