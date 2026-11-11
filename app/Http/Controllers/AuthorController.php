<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();

        return view('author.index')->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {

        $author = Author::create($request->all());

        return redirect()->route('authors.index')->with('message', 'Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('author.show')->with('author', $author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('author.edit')->with('author', $author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $author->update($request->all());

        return redirect()->route('authors.index')->with('message', 'Autor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('message', 'Autor eliminado exitosamente.');
    }
}
