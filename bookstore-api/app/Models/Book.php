<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'author', 'publisher', 'cover', 'price', 'weight', 'stock', 'status'
    ];
<<<<<<< HEAD
<<<<<<< HEAD

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
}
