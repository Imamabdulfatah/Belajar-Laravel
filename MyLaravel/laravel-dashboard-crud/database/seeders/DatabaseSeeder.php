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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'IMAM ABDUL FATAH',
        //     // karena unique maka tidak bisa ditambah yang sama
        //     'email' => 'imam123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'MAS ZAM ZAM',
        //     // karena unique maka tidak bisa ditambah yang sama
        //     'email' => 'zam123@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, 1',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, perspiciatis voluptate omnis soluta molestiae vero dicta quae? Nesciunt, numquam maxime alias,</p><p> delectus eaque esse nobis hic cum voluptas laudantium optio reprehenderit minima sunt labore ea rem officia magnam cupiditate quam vel! Praesentium possimus aspernatur id blanditiis minima tenetur,</p> <p> placeat dignissimos autem tempora consequatur cumque ullam debitis laborum illo incidunt, beatae rem delectus magnam ducimus similique reprehenderit perspiciatis quia optio dolores? Excepturi sapiente magnam maxime animi fugiat ipsam culpa cupiditate iste necessitatibus blanditiis. Voluptates aperiam, commodi corporis possimus harum aliquid. Consequuntur possimus voluptatibus libero ad excepturi ut dolore a vel molestias?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, perspiciatis voluptate omnis 2',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, perspiciatis voluptate omnis soluta molestiae vero dicta quae? Nesciunt, numquam maxime alias,</p><p> delectus eaque esse nobis hic cum voluptas laudantium optio reprehenderit minima sunt labore ea rem officia magnam cupiditate quam vel! Praesentium possimus aspernatur id blanditiis minima tenetur,</p> <p> placeat dignissimos autem tempora consequatur cumque ullam debitis laborum illo incidunt, beatae rem delectus magnam ducimus similique reprehenderit perspiciatis quia optio dolores? Excepturi sapiente magnam maxime animi fugiat ipsam culpa cupiditate iste necessitatibus blanditiis. Voluptates aperiam, commodi corporis possimus harum aliquid. Consequuntur possimus voluptatibus libero ad excepturi ut dolore a vel molestias?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit 3',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, perspiciatis voluptate omnis soluta molestiae vero dicta quae? Nesciunt, numquam maxime alias,</p><p> delectus eaque esse nobis hic cum voluptas laudantium optio reprehenderit minima sunt labore ea rem officia magnam cupiditate quam vel! Praesentium possimus aspernatur id blanditiis minima tenetur,</p> <p> placeat dignissimos autem tempora consequatur cumque ullam debitis laborum illo incidunt, beatae rem delectus magnam ducimus similique reprehenderit perspiciatis quia optio dolores? Excepturi sapiente magnam maxime animi fugiat ipsam culpa cupiditate iste necessitatibus blanditiis. Voluptates aperiam, commodi corporis possimus harum aliquid. Consequuntur possimus voluptatibus libero ad excepturi ut dolore a vel molestias?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit 4',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, perspiciatis voluptate omnis soluta molestiae vero dicta quae? Nesciunt, numquam maxime alias,</p><p> delectus eaque esse nobis hic cum voluptas laudantium optio reprehenderit minima sunt labore ea rem officia magnam cupiditate quam vel! Praesentium possimus aspernatur id blanditiis minima tenetur,</p> <p> placeat dignissimos autem tempora consequatur cumque ullam debitis laborum illo incidunt, beatae rem delectus magnam ducimus similique reprehenderit perspiciatis quia optio dolores? Excepturi sapiente magnam maxime animi fugiat ipsam culpa cupiditate iste necessitatibus blanditiis. Voluptates aperiam, commodi corporis possimus harum aliquid. Consequuntur possimus voluptatibus libero ad excepturi ut dolore a vel molestias?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
