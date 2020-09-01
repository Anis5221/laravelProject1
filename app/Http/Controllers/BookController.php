<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function index(){

        return view('Book.bookindex');
    }

    public function allbook(){

        $book = Book::all();
        
         return view('Book.allbook', compact('book'));
    }

    public function stor(Request $request){

        $book = new Book;
        $book->name = $request->name;
        $book->subject = $request->subject;
        $book->details = $request->details;
        $book->save();
        if($book){
            $notification = array(
                'message' => 'Book created successfully!',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.book')->with($notification);
        }
    }


    public function show($id){

        $bo =Book::findorfail($id);
         return view('Book.viewbook', compact('bo'));
    }


    public function edit($id){

        $bo = BooK::findorfail($id);
        return view('Book.editbook', compact('bo'));
    }


    public function update($id, Request $request)
    {
        $book = new Book;
        $book->name = $request->name;
        $book->subject = $request->subject;
        $book->details = $request->details;
        $book->save();
        return redirect()->route('all.book');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if($book->delete()){
            return redirect()->back();
        }else{
            echo 'not deleted';
        }
        
        
    }

}
