<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($j=1; $j < 21; $j++) {
            Category::create([
                'name' => 'Categoria '.$j,
            ]);
        }
    }
}
