<?php

use Illuminate\Database\Seeder;

class Sports extends Seeder
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
        DB::table('sports')->insert([
            'primary_sport_name' => $faker->randomElement($array = array ('Primary1','Primary2','Primary3','Primary4')),
            'secondary_sport_name' => $faker->randomElement($array = array ('Secondry1','Secondry2','Secondry3','Secondry4')),
            'sport_description' =>  $faker->realText($maxNbChars = 100, $indexSize = 2),
            'sports_modifier' => $faker->randomElement($array = array ('Modifier1','Modifier2')),
            'doc_link' => $faker->randomElement($array = array ('Link1','Link2')),
            'indoor_Outdoor' => $faker->randomElement($array = array ('Indoor','Outdoor')),
            'created_at' => $faker->dateTime('2014-02-25 08:37:17'),
            'updated_at' => $faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
