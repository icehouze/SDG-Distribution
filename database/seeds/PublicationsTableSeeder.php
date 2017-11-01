<?php

use App\Publication;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	    {
		 factory(Publication::class, 50)->create();
	    }
}
