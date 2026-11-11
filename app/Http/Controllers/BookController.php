<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        return view('book.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
//        dd($request->all());
        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Libro guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        return view('book.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBookRequest $request, Book $book)
    {
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Libro eliminado correctamente');
    }
}
