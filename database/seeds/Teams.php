<?php

use Illuminate\Database\Seeder;

class Teams extends Seeder
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
        DB::table('teams')->insert([
            'name' => $faker->name,
            'description' => $faker->text,
            'sport_id' => $i+1,	
            'created_at' => $faker->dateTime('2014-02-25 08:37:17'),
            'updated_at' => $faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
