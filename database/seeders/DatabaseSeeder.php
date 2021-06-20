<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $user = User::factory()->create(['name' => 'Jhon Snow']);
        $user2 = User::factory()->create(['name' => 'Cthulhu Doe']);
        $user3 = User::factory()->create(['name' => 'Alsina Dimitresku']);
        $category = Category::factory()->create(['name' => 'War']);
        $category2 = Category::factory()->create(['name' => 'Magic']);
        $category3 = Category::factory()->create(['name' => 'Villages']);

        Post::factory(5)->create(['user_id' => $user->id, 'category_id' => $category->id]);
        Post::factory(3)->create(['user_id' => $user2->id, 'category_id' => $category2->id]);
        Post::factory(6)->create(['user_id' => $user3->id, 'category_id' => $category3->id]);

    }
}


