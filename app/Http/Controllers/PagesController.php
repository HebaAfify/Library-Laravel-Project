<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $books = Book::latest()->paginate(4);
        return view('welcome', compact('books'));
    }
    public function viewCategory($id){
        $category = Category::find($id);
        $books = $category->books;
        return view('viewcategory', compact('books', 'category'));
    }
    public function viewBook($id){
        $book = Book::findOrFail($id);
        return view('book', compact('book'));
    }
    public function addComment(Request $request, $id){
        $this->validate($request, [
            'comment' => 'required'
        ]);

        $book = Book::findOrFail($id);
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->book_id = $book->id;
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect()->back();
    }
}
