<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Resources\Books as BookResourceCollection;
use App\Models\Book;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Resources\Book as BookResource;
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

class BookController extends Controller
{
    //
    public function print($title)
    {
        return $title;
    }
    //public function index()
    //{
    //    $books = DB::select('select * from books');
    //    return $books;
    //}
    public function view($id)
    {
        $book = DB::select('select * from books where id = :id' , ['id' => $id]);
        return $book;
    }
    public function top($count)
    {
        $criteria = Book::select('*')
            ->orderBy('views', 'DESC')
            ->limit($count)
            ->get();
        return new BookResourceCollection($criteria);
    }
    public function index()
    {
        $criteria = Book::paginate(4);
        return new BookResourceCollection($criteria);
    }
<<<<<<< HEAD
<<<<<<< HEAD
    public function slug($slug)
    {
        $criteria = Book::where('slug', $slug)->first();
        return new BookResource($criteria);
    }
    public function search($keyword)
    {
        $criteria = Book::select('*')
            ->where('title', 'LIKE', "%".$keyword."%")
            ->orderBy('views', 'DESC')
            ->get();
        return new BookResourceCollection($criteria);
    }
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
}
