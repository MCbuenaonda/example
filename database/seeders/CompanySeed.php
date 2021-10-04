<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($j=1; $j < 11; $j++) {
            Company::create([
                'name' => 'Compañia '.$j,
            ]);
        }
    }
}
