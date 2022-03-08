<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\categories;
use App\Models\details;
use DB;

class BookController extends Controller
{
    //
    public function index()
    {
        $categories = categories::all();
        $books = DB::table('books')
                 ->join('details', 'books.id', '=', 'details.book_id')
                 ->paginate(5);

        $data = [
            'title' => 'Book List',
            'categories' => $categories,
            'books' => $books
        ];

        return view('home', $data);
    }

    public function getBookbyCategory($id)
    {
        $categories = categories::all();
        $books = DB::table('books')
                 ->join('details', 'books.id', '=', 'details.book_id')
                 ->where('books.category_id', '=', $id)
                 ->paginate(5);

        $name = categories::where('id', '=', $id)->first();

        $data = [
            'title' => $name->category,
            'categories' => $categories,
            'books' => $books
        ];

        return view('home', $data);
    }

    public function getBookDetail($id)
    {
        $categories = categories::all();
        $book = DB::table('books')
                 ->join('details', 'books.id', '=', 'details.book_id')
                 ->where('books.id', '=', $id)
                 ->first();

        $data = [
            'title' => 'Book Detail',
            'categories' => $categories,
            'book' => $book
        ];

        return view('detail', $data);
    }

    public function contact()
    {
        $categories = categories::all();

        $data = [
            'title' => 'Contact',
            'categories' => $categories
        ];

        return view ('contact', $data);
    }
    
}
