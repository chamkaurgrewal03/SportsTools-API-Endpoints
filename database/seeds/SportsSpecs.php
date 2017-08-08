<?php

use Illuminate\Database\Seeder;

class SportsSpecs extends Seeder
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
        DB::table('sports_specs')->insert([
            'points_for_win' => $faker->randomElement($array = array ('6','8','6','5')),
            'points_for_loss' => $faker->randomElement($array = array ('1','0','3','2')),
            'points_for_draw' => $faker->randomElement($array = array ('1','2','3','4')),
            'red_card' => $faker->randomElement($array = array ('3','4')),
            'yellow_card' => $faker->randomElement($array = array ('3','4')),
            'expulsions' => $faker->randomElement($array = array ('expulsions1','expulsions2')),
            'sport_id' => $i+1,
            'roster_size' => $faker->randomElement($array = array ('3','4','5','2')),
            'created_at' => $faker->dateTime('2014-02-25 08:37:17'),
            'updated_at' => $faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
