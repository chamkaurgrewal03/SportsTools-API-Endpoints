<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
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
        DB::table('roles')->insert([
            'role_name'=> $faker->randomElement($array = array ('Player','Coach','support')),
            'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
            'role_target_type' => $faker->randomElement($array = array ('Player','Coach')),
            'created_at'=>$faker->dateTime('2014-02-25 08:37:17'),
            'updated_at'=>$faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
