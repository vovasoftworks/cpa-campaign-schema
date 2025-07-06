<?php

namespace Database\Seeders;

use App\Models\Click;
use Illuminate\Database\Seeder;

class ClickSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        Click::query()->insert([
            [
                'click_id' => 'clk_001',
                'offer_id' => 1,
                'source_id' => 1,
                'ip' => '192.168.1.1',
                'user_agent' => 'Mozilla/5.0',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'click_id' => 'clk_002',
                'offer_id' => 1,
                'source_id' => 2,
                'ip' => '192.168.1.2',
                'user_agent' => 'Mozilla/5.0',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'click_id' => 'clk_003',
                'offer_id' => 2,
                'source_id' => 2,
                'ip' => '192.168.1.3',
                'user_agent' => 'Mozilla/5.0',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
