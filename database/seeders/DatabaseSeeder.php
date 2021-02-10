<?php

use App\Article;
use App\Drug;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@rxcirrhose.com',
            'password' => '$2y$10$pX4i3tsBCC03RTSlVxeRFufu4AjtGfpQwM7LxuddLnzrMwv0w2yT2'
        ]);

        Article::create([
            'title' => 'Biguanides'
        ]);

        Drug::create([
            'article_id' => 1,
            'name' => 'Metformine',
            'childA_category' => 1,
            'childB_category' => 2,
            'childC_category' => 3
        ]);

        Drug::create([
            'article_id' => 1,
            'name' => 'Metamorfine',
            'childA_category' => 2,
            'childB_category' => 3,
            'childC_category' => 4
        ]);
    }
}
