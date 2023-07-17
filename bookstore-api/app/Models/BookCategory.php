<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
<<<<<<< HEAD
<<<<<<< HEAD
    public $table = 'book_category';
    protected $fillable = ['book_id', 'category_id'];
=======
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    protected $table = 'book_category';
    protected $fillable = [
        'book_id', 'category_id', 'invoice_number', 'status'
    ];
<<<<<<< HEAD
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
}
