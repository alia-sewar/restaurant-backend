<?php

namespace Database\Seeders;

use App\Concerns\HasDefaultLevel;
use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    use HasDefaultLevel;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach ($this->levels() as $key => $value) {
            Level::query()->create($value);
        }
    }
}
