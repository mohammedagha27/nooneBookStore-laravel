<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('admin.books.create', compact('categories', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('uploads'), $new_name);
        $data = $request->except('image');
        $data['image'] = Storage::disk('file')->putFile('images', $request->file('image'));
        $data['file'] =$new_name;
        Book::create($data);
        return redirect()->route('admin.books.index')->with('success', 'Book Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.books.edit', compact('book', 'categories', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            Storage::disk('file')->delete($book->image);
            $data['image'] = Storage::disk('file')->putFile('images', $request->file('image'));
        }
        $book->update($data);
        return redirect()->route('admin.books.index')->with('success', 'Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Storage::disk('file')->delete($book->image);
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Book Deleted Successfully');
    }
}
