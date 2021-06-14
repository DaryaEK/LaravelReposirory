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
        User::truncate();
        Category::truncate();
        Post::truncate();


         $user = User::factory()->create();

         $sport = Category::create(
             [
                 'name' => 'Sport',
                 'slug' => 'sport'
             ]
             );
         $news = Category::create(
                [
                    'name' => 'News',
                    'slug' => 'news'
                ]
                );
        $action = Category::create(
                    [
                        'name' => 'Action',
                        'slug' => 'action'
                    ]
                    );

Post::create(
    [
        'user_id' => $user->id,
        'category_id' => $sport->id,
        'header' => 'First post',
        'slug' => 'fisrt_post',
        'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'
    ]
    );
    Post::create(
        [
            'user_id' => $user->id,
        'category_id' => $news->id,
            'header' => 'Second post',
            'slug' => 'second_post',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'
        ]
        );
    Post::create(
            [
                'user_id' => $user->id,
        'category_id' => $action->id,
                'header' => 'Third post',
                'slug' => 'third_post',
                'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'
            ]
            );
    }
}


