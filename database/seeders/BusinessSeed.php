<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $companies = Company::all();

        foreach ($companies as $key => $company) {
            for ($i=1; $i < 3; $i++) {
                Business::create([
                    'name' => 'Negocio '.$key.$i,
                    'address' => 'calle #'.$i.'. Col. Colonia-'.$key.$i.', Alcaldia, CP 062'.$i.$key,
                    'company_id' => $company->id
                ]);
            }
        }
    }
}
