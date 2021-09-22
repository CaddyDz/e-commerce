<?php

declare(strict_types=1);

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kittens = [
            'Femme', 'Homme', 'Enfants et Bébés', 'Linge et decor', 'Accessoires & Montres'
        ];
        foreach ($kittens as $cat) {
            Category::create(['name' => $cat]);
        }
    }
}
