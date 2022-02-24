<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use App\Models\{Brand, Category};
use Illuminate\Support\Facades\Storage;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('brands');
        Storage::disk('public')->makeDirectory('brands');
        $cats = Category::select('id')->pluck('id')->toArray();
        foreach ($cats as $cat) {
            Brand::factory(2)->create([
                'category_id' => $cat
            ]);
        }
    }
}
