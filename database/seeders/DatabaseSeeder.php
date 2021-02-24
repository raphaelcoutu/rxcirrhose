<?php

use App\Models\Article;
use App\Models\Drug;
use App\Models\User;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@rxcirrhose.com',
            'password' => '$2y$10$pX4i3tsBCC03RTSlVxeRFufu4AjtGfpQwM7LxuddLnzrMwv0w2yT2'
        ]);
    }
}
