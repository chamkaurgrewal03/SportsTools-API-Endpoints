<?php

use Illuminate\Database\Seeder;

class Tournaments extends Seeder
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
        DB::table('tournaments')->insert([
            'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'end_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'creation_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'games_number' => $faker->randomDigit,
            'name' => $faker->name,
            'description' => $faker->text,
            'organization_id' => $i+1,
            'sport_id' => $i+1,
            'created_at' => $faker->dateTime('2014-02-25 08:37:17'),
            'updated_at' => $faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
