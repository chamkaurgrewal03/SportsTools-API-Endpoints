<?php

use Illuminate\Database\Seeder;

class PersonAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $limit = 100;
      for ($i = 0; $i < $limit; $i++) {
        DB::table('address')->insert([
            'address1'=>$faker->cityPrefix,
            'address2'=>$faker->secondaryAddress,
            'city'=>$faker->city,
            'state'=>$faker->state,
            'county'=>$faker->stateAbbr,
            'zip_postel'=>$faker->postcode,
            'country'=>$faker->country,
            'timezone' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'gps_lat_long'=>$faker->latitude($min = -90, $max = 90),
            'location'=>$faker->city,
            'address_to_what'=>$faker->streetAddress,
            'created_at'=>$faker->dateTime('2014-02-25 08:37:17'),
            'updated_at'=>$faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
