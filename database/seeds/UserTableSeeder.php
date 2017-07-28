<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
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
          DB::table('users')->insert([ //,
              'username' => $faker->name,
              'email' => $faker->unique()->email,
              'password' => Hash::make($password),
              'fingerprint'=>$faker->uuid,
              'camera'=>$faker->uuid,
              'created_at'=>$faker->dateTime('2014-02-25 08:37:17'),
              'updated_at'=>$faker->dateTime('2014-02-25 08:37:17')
          ]);
        }
    }
}
