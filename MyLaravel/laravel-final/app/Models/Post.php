<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// punya sluggble
// https://github.com/cviebrock/eloquent-sluggable
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
  
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // https://laravel.com/docs/8.x/eloquent#local-scopes
    // array $filter digunakan untuk pencarian yang lain juga
    public function scopeFilter($query, array $filters)
    {
        // https://laravel.com/docs/8.x/collections#method-when

        // https://www.php.net/manual/en/migration70.new-features.php  ->features baru php
       
        // untuk search semua mengunakan versi isset
        $query->when($filters['search'] ?? false, function($query, $search){
            // pencarian sesuai judul   (where)
            // pencarian kata apa saja di kalimat didalam (orWhere)
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        // untuk category pencarian menguankan versi callback
        $query->when($filters['category'] ?? false, function($query, $category){
            // use untuk menyamakan maksud category dia atas karena ada 2 function
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // untuk author pencarian mengunakan versi arrow function
        $query->when($filters['author'] ?? false, fn($query, $author) => 
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author) 
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // menghubungkan ke user
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    // default url slug
    // https://laravel.com/docs/8.x/routing#route-model-binding
    // untuk default yang route dashboard
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // punya sluguble
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}

