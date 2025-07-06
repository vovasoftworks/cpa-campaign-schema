<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        Offer::query()->insert([
            ['name' => 'Crypto Offer', 'payout' => 25.00, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dating Offer', 'payout' => 10.50, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
