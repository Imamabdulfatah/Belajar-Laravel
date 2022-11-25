<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // membauat data secara acak oleh laravel
       

        User::create([
            'name' => 'IMAM ABDUL FATAH',
            'username' => 'Imam Abdul Fatah',
            'email' => 'imam123@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'MAS ZAM ZAM',
        //     // karena unique maka tidak bisa ditambah yang sama
        //     'email' => 'zam123@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Coder',
            'slug' => 'coder'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'Business'
        ]);


        Post::factory(25)->create();
    }
}
