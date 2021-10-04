<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeed;
use Database\Seeders\BusinessSeed;
use Database\Seeders\CategorySeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeed::class);
        $this->call(CompanySeed::class);
        $this->call(BusinessSeed::class);
        $this->call(ProductSeed::class);
    }
}
