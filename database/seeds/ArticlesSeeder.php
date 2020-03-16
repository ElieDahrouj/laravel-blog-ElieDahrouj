<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Article;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        for ($i = 0; $i < 20; $i++) {
            $post = new Article();
            $post->title = $faker->sentence(5);
            $post->summary = $faker->realText(50);
            $post->content = $faker->realText(300);
            $post->is_published = rand(0,1);
            $post->user_id = rand(1,5);
            $post->category_id = rand(1,5);
            $post->save();
        }
    }
}
