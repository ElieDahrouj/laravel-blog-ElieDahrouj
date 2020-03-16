<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        for ($i = 1; $i <= 5 ; $i++) {
            $category = new Category();
            $category->name = $faker->sentence(5);
            $category->save();
        }
    }
}
