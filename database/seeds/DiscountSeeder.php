<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use App\Models\{Discount, Product};

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::take(20)->select('id')->pluck('id');
        foreach ($products as $product) {
            Discount::factory()->create([
                'product_id' => $product,
            ]);
        }
    }
}
