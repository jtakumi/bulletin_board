<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(IndustryTableSeeder::class);
         //$this->call(OccupationTableSeeder::class);
    }
}
