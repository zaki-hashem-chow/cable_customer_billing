<?php

use Illuminate\Database\Seeder;


class CustomerServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CustomerService::class, 4)->create();
    }
}
