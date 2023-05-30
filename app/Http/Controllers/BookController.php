<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index (){
        $books = Book::all();
        return view('index', [
            'posts' => $books->sortBy('created_at')->toQuery()->paginate(5),
            'books' => $books->toQuery()->paginate(3),
        ]);
    }

    public function detail(Book $id){
        $date = $id->day . " " . $id->month. " ". $id->year;
        return view('detail', [
            'book' => $id,
            'date' => $date,
            'title' => 'talkshow'
        ]);
    }
}
