<?php

use Illuminate\Database\Seeder;

class UserPrivileges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $limit = 10;
      for ($i = 0; $i < $limit; $i++) {
        DB::table('user_privileges')->insert([
        	'user_id'=>$faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'privilege_id'=>$faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'grant_role' => $faker->name,
            'target_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'created_at'=>$faker->dateTime('2014-02-25 08:37:17'),
            'updated_at'=>$faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
