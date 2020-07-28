<?php

use Illuminate\Database\Seeder;
use App\Company;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(count(Company::all()) < 1)
        {
            factory(\App\Company::class)->create();
        }
    }
}
