<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
    * Returns the Category object wich the post belongs to
    */
    public function category():object
    {
        return $this->belongsTo(Category::class);
    }

    /**
    * Returns the Author object of wich the post belongs to
    */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
