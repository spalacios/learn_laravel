<?php

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,10)->create()->each(
            function ($user){
                $recipes = factory(\App\Recipe::class,10)->make();
                $user->recipes()->saveMany($recipes);

                foreach ($recipes as $recipe){
                    $attachments = factory(\App\Attachment::class, 5)->make();
                    /** @var $recipe \App\Recipe */
                    $recipe->attachments()->saveMany($attachments);
                }
            }
        );
    }
}
