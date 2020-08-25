<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'DESC')->paginate(3);

        return view(
            'books.index',  
            compact('books')
        );
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view(
            'books.show', 
            compact('book')
        );
    }

    public function create()
    {
        return view(
            'books.create'
        );
    }

    public function store(Request $request)
    {
        // validation 
        $request->validate([
            'title' => 'required|string|max:100',
            'desc' => 'required|string',
            'img' => 'required|image|mimes:jpg,png',
        ]);

        // move 
        $img = $request->file('img');
        $ext = $img->getClientOriginalExtension();
        $name = "book-". uniqid() . ".$ext";
        $img->move( public_path('uploads/books') , $name);

        Book::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'img' => $name
        ]);

        return redirect( route('books.index') );
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view(
            'books.edit',
            compact('book')
        );
    }

    public function update(Request $request, $id)
    {
        // validation 
        $request->validate([
            'title' => 'required|string|max:100',
            'desc' => 'required|string',
            'img' => 'nullable|image|mimes:jpg,png',
        ]);

        $book = Book::findOrFail($id);
        $name = $book->img;

        if($request->hasFile('img'))
        {
            if($name !== null) 
            {
                unlink( public_path('uploads/books/') . $name );
            }

            $img = $request->file('img');
            $ext = $img->getClientOriginalExtension();
            $name = "book-". uniqid() . ".$ext";
            $img->move( public_path('uploads/books/') , $name);
        }

        $book->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'img' => $name
        ]);

        return redirect( route('books.edit', $id) );
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);

        if($book->img !== null) 
        {
            unlink( public_path('uploads/books/') . $book->img );
        }

        $book->delete();

        return redirect( route('books.index') );
    }
}


// $books = Book::select('title', 'desc')->get();
// $books = Book::where('id', '>=', 2)->get();
// $books = Book::select('title', 'desc')->where('id', '>=', 2)->orderBy('id', 'DESC')->get();
