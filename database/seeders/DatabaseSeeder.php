<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categories;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => "Raihan",
            'email' => 'raihan@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        // Post::create([
        //     'title' => 'Judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, magni ipsum, quam vero corporis delectus quas dolorem alias eos voluptates ex sunt ratione incidunt. Doloremque eum molestiae est unde quis.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, error. Assumenda, delectus. Quaerat vitae rerum quibusdam, non soluta debitis harum facilis nihil atque quae pariatur quod, iure natus dolorum ad?',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, magni ipsum, quam vero corporis delectus quas dolorem alias eos voluptates ex sunt ratione incidunt. Doloremque eum molestiae est unde quis.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, error. Assumenda, delectus. Quaerat vitae rerum quibusdam, non soluta debitis harum facilis nihil atque quae pariatur quod, iure natus dolorum ad?',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, magni ipsum, quam vero corporis delectus quas dolorem alias eos voluptates ex sunt ratione incidunt. Doloremque eum molestiae est unde quis.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, error. Assumenda, delectus. Quaerat vitae rerum quibusdam, non soluta debitis harum facilis nihil atque quae pariatur quod, iure natus dolorum ad?',
        //     'category_id' => 2,
        //     'user_id' => 1 
        // ]);
    }
}
