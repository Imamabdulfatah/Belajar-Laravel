<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // ini properti yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // ini yng dijagain/ engga boleh
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // menghubungkan database
    // lihat di poto tentang belongTo  atau doc laravel relationship eloquent
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // menghubungkan ke user
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

}

