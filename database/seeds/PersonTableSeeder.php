<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $limit = 100;
      $password=123;
      for ($i = 0; $i < $limit; $i++) {
        DB::table('persons')->insert([
            'user_id'=>$faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt'),
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'calculated_age'=>$faker->randomDigit,
            'gender'=>$faker->randomElement($array = array ('Male','Female','other')),
            'privacy'=>$faker->text($maxNbChars = 200),
            'special_needs'=>$faker->text($maxNbChars = 200),
            'picture'=>$faker->imageUrl($width = 640, $height = 480),
            'citizen'=>$faker->country,
            'hometown'=>$faker->address,
            'created_at'=>$faker->dateTime('2014-02-25 08:37:17'),
            'updated_at'=>$faker->dateTime('2014-02-25 08:37:17')
        ]);
      }
    }
}
