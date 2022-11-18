<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
    * Returns a collection of the Posts in this Catergory
    */
    public function functionName()
    {
        return $this->hasMany(Post::class);
    }
}
