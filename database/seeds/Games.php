<?php

use Illuminate\Database\Seeder;

class Games extends Seeder
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
      for ($i = 1; $i < $limit; $i++) {
        DB::table('games')->insert([
            'name' => $faker->name,
            'status_id' => $faker->randomElement($array = array ('1','0')),
            'description' => $faker->text,
            'datetime' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
            'team1' => $faker->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),
            'team2' => $faker->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),
            'team1_points' => $faker->randomElement($array = array ('4','5','3')),
            'team2_points' => $faker->randomElement($array = array ('4','5','3')),
            'game_status' => $faker->randomElement($array = array ('1','0')),	
            'game_type' => $faker->randomElement($array = array ('1','0')),
            'league_id' => $i+1,
            'tournament_id' => $i+1,
            'created_at' => $faker->dateTime('2014-02-25 08:37:17'),
            'updated_at' => $faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
