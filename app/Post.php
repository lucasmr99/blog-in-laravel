<?php

namespace App;

use App\Category;
use App\PostImage;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'url_clean', 'category_id','posted'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->hasOne(PostImage::class);
    }
}
