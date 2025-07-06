<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        Source::query()->insert([
            ['name' => 'tiktok_cpa', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'facebook_ads', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
