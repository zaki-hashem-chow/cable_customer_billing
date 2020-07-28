<?php

use Illuminate\Database\Seeder;



class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Payment::class, 150)->create();
    }
}
