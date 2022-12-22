<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function index()
    {
        $books = Book::simplepaginate(6);
        return view('library.index', compact('books'));
    }

    public function about()
    {
        $categories = Category::all();
        return view('library.about', compact('categories'));
    }

    public function contact()
    {
        return view('library.contact');
    }

    public function book($id)
    {
        $book = Book::find($id);
        return view('library.book', compact('book'));
    }
    public function category($id)
    {
        $category = Category::find($id);
        $books = $category->Book();
        return view('library.all-cat-book', compact('books','category'));
    }
}
