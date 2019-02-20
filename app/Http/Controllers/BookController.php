<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books= Book::all();
       return view('book.index',compact('books'));
    }
     public function sample()
    {
         return view('book.book');
   
    }

    
    public function create()
    {
       return view('book.book');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//from add button
    {
      $bk= new Book([
          'title'=>$request->get('title'),
          'body'=>$request->get('body'),
          'content'=>$request->get('content'),
          'path'=>$request->get('path')
      ]);
    

   $bk->save();
   return redirect('/book/create');
    }
    
   
    public function show(book $book)
    {
        return "bala";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books =book::find($id);
        return view('book.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $book= Book::find($id);
       $book->title=$request->get('title');
       $book->body=$request->get('body');
       $book->content=$request->get('content');
       $book->path=$request->get('path');
       $book->save();
       return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book =Book::find($id);
        $book ->delete();
        return redirect('/book');
    }
}
