<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        for ($i = 1; $i <= 5; $i++) {
            $user = new User();
            $user->name = $faker->lastName;
            $user->email = $faker->email;
            $user->password = sha1(\Illuminate\Support\Str::random(30));
            $user->save();
        }
    }
}
