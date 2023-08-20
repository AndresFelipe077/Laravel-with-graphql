<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     * 
     * @author Andres Felipe Pizo Luligo
     */
    public function run(): void
    {
        Comment::factory(30)->create();
    }
}
