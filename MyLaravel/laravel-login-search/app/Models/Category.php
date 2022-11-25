<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // kita balik 1 category bisa saja dimiliki banyak post
    public function posts() 
    {
        return $this->hasMany(Post::class);
    }
}

// keterhubungan antar database
// video no 8 unpas
// - https://laravel.com/docs/8.x/eloquent-relationships#main-content