<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Http\Requests;

//
class BooksController extends Controller
{
    public function index()
    {
//        $books = Book::orderBy('updated_at', 'desc')->get();
//        $books = Book::paginate(3);
        $books = Book::orderBy('updated_at', 'desc')->paginate(3);
        return view('books/index')->with('books', $books );
    }
    //
    public function create()
    {
//var_dump('#create');
        return view('books/create')->with('book', new Book());
    }

    public function store(Request $request )
    {
//var_dump($request->all() );
//exit();
        $book = new Book();
        $book->fill($request->all());
        $book->save();
//exit();
        return redirect()->route('books.index');
    }
    //
    //
    public function show($id)
    {
        $book = Book::find($id);
        return view('books/show')->with('book', $book);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books/edit')->with('book', $book);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->fill($request->all());
        $book->save();
        return redirect()->route('books.index');
    }
    //
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }    




    //
}
