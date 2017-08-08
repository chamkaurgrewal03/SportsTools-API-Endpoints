<?php

use Illuminate\Database\Seeder;

class Organizations extends Seeder
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
        DB::table('organizations')->insert([
            'parent_organization_id' => $faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt'),
            'name' => $faker->name,
            'type' => $faker->randomElement($array = array ('Type1','Type2','Type3','Type4')),
            'sports' => $faker->randomElement($array = array ('Footbal','Rugby','Soccer','Diving')),
            'primary_secondary' => $faker->randomElement($array = array ('primary','secondary')),
            'organization_logo' => $faker->randomElement($array = array ('Logo1','Logo2')),
            'organization_contact_info' => $faker->address,
            'organization_record' => $faker->realText($maxNbChars = 100, $indexSize = 2),
            'created_at' => $faker->dateTime('2014-02-25 08:37:17'),
            'updated_at' => $faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
