<?php

namespace App\Models;

class Post
{
    // isi berupa array
   // untuk databse sederhana
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            // slug adalah judul dibuat huruf kecil dan spaci dikasi -
            "slug" => "judul-post-pertama",
            "author" => "Imam Abdul Fatah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsum nulla tempora. Quo nisi natus repudiandae laboriosam praesentium nobis est quod asperiores unde nulla iure dolore nemo molestiae quibusdam perspiciatis, quas repellat laborum ea illo laudantium quia quaerat. Molestiae perspiciatis dolorem facere laboriosam expedita quae similique explicabo ex veritatis, optio et, modi ipsa accusamus exercitationem eius blanditiis, quibusdam tempore inventore. Ipsam, ipsum quia neque quis molestias porro accusantium optio eaque laudantium, dolor illum officiis reiciendis deleniti enim molestiae non dolorum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ucup bintitan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium obcaecati tempora exercitationem nesciunt? Temporibus molestiae eligendi libero omnis, nam veniam quisquam mollitia, tempora sit magnam blanditiis alias autem maxime, qui ullam. Cupiditate unde nemo incidunt illum quia quasi modi voluptates quisquam earum quas, culpa minima exercitationem asperiores non alias adipisci quidem id totam labore fuga voluptatum? Et, corrupti accusantium molestias recusandae quas illum harum sapiente, ullam obcaecati blanditiis id architecto. Ea eaque doloribus illum dolorem."
        ],
    ];

    public static function all() 
    {
        // return self::$blog_posts

        // https://laravel.com/docs/9.x/collections#main-content      -> collection laravel 
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // mengambil postingan yang banyak
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
            // sama seperti diatas
        // https://laravel.com/docs/9.x/collections#main-content      -> collection laravel 
        return $posts->firstWhere('slug', $slug);
    }
}

// https://laravel.com/docs/9.x/eloquent
// atau download extention
//  lalu ctrl shift p / membuka comment pallet
// cari artisan model