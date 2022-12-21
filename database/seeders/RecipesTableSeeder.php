<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = config('db_seeder.recipes');
        foreach($recipes as $recipe){
            $newRecipe = new Recipe();
            $newRecipe->title = $recipe['title'];
            $newRecipe->image = $recipe['image'];
            $newRecipe->instructions = $recipe['instructions'];
            $newRecipe->save();

        }
    }
}
