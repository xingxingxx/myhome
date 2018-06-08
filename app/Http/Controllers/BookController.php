<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookBody;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate();
        return view('book.index', compact('books'));
    }

    public function show($id)
    {
        $bookBody=BookBody::where('book_id',$id)->first();
        return view('book.show',compact('bookBody'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

}
