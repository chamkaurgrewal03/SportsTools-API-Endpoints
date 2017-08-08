<?php

use Illuminate\Database\Seeder;

class Leagues extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $limit = 50;
      for ($i = 0; $i < $limit; $i++) {
        DB::table('leagues')->insert([
            'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'end_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'creation_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'games_number' => $faker->randomElement($array = array ('10','20','34','42')),
            'name' => $faker->randomElement($array = array ('World','James leauge','Spanish Laga','Western')),
            'description' => $faker->text,
            'organization_id' => $i+1,
            'sport_id' => $i+1,	
            'created_at' => $faker->dateTime('2014-02-25 08:37:17'),
            'updated_at' => $faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
