<?php

use Illuminate\Database\Seeder;

class PersonAddressesSeeder extends Seeder
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
        DB::table('person_addresses')->insert([
            'person_id'=>$faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt'),
            'address_id'=>$faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt'),
            'address_type'=>$faker->randomElement($array = array ('0','1')),
            'created_at'=>$faker->dateTime('2014-02-25 08:37:17'),
            'updated_at'=>$faker->dateTime('2014-02-25 08:37:17')
        ]);
        }
     }   
}
