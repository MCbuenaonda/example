<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Business;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = Business::all();

        foreach ($businesses as $key => $business) {
            for ($i=1; $i < 21; $i++) {
                Product::create([
                    'name' => 'Producto '.$business->id.$i,
                    'qty' => 10,
                    'amount' => ($business->id * $i) * 10,
                    'category_id' => $key+1,
                    'business_id' => $business->id
                ]);
            }
        }
    }
}
