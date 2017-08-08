<?php

use Illuminate\Database\Seeder;

class Privileges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $limit = 3;
      for ($i = 0; $i < $limit; $i++) {
        DB::table('privileges')->insert([
            'role_id'=>$i+1,
            'privilege' => $faker->name,
            'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
            'created_at'=>$faker->dateTime('2014-02-25 08:37:17'),
            'updated_at'=>$faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
