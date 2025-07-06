<?php

namespace Database\Seeders;

use App\Models\Conversion;
use Illuminate\Database\Seeder;

class ConversionSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        Conversion::query()->insert([
            ['click_id' => 'clk_001', 'status' => 'approved', 'revenue' => 25.00, 'created_at' => $now, 'updated_at' => $now],
            ['click_id' => 'clk_002', 'status' => 'rejected', 'revenue' => 0.00, 'created_at' => $now, 'updated_at' => $now],
            ['click_id' => 'clk_003', 'status' => 'approved', 'revenue' => 10.50, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
