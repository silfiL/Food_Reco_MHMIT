<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Article;

class InsertDefaultArticle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run(Faker $faker)
    {
        for($i=1; $i<=6; $i++)
        {
            $article = new Article();
            $article->title = $faker->text(15);
            $article->content = $faker->text;
            $article->image = $faker->image('public/images',400,300, null, false);
            $article->save();
        }
    }
    
}
