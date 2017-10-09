<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('publications')->truncate();
        DB::table('locations')->truncate();

        $this->call(PublicationsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);

        Eloquent::reguard();
    }
}
