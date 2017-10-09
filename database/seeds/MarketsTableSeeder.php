<?php

use Illuminate\Database\Seeder;

class MarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//clear our database
		DB::table('markets')->delete();

		// seed our markets table
		$BR = Market::create(array(
			'market_name' => 'Branson',
			'market_abbr' => 'BR'
		));
		$CG = Market::create(array(
			'market_name' => 'Williamsburg',
			'market_abbr' => 'CG'
		));
		$GS = Market::create(array(
			'market_name' => 'Myrtle Beach',
			'market_abbr' => 'GS'
		));
		$HO = Market::create(array(
			'market_name' => 'Hatteras-Ocracoke',
			'market_abbr' => 'HO'
		));
		$OB = Market::create(array(
			'market_name' => 'Outer Banks',
			'market_abbr' => 'OB'
		));
		$OC = Market::create(array(
			'market_name' => 'Ocean City',
			'market_abbr' => 'OC'
		));
		$RH = Market::create(array(
			'market_name' => 'Coastal Delaware',
			'market_abbr' => 'RH'
		));
		$SA = Market::create(array(
			'market_name' => 'Sarasota-Bradenton',
			'market_abbr' => 'SA'
		));
		$SC = Market::create(array(
			'market_name' => 'Sanibel-Captiva',
			'market_abbr' => 'SC'
		));
		$SM = Market::create(array(
			'market_name' => 'Smoky Mountains',
			'market_abbr' => 'SM'
		));
		$VB = Market::create(array(
			'market_name' => 'Virginia Beach',
			'market_abbr' => 'VB'
		));
    }
}
