<?php

namespace App\Http\Controllers;

use App\Stud;
use Illuminate\Http\Request;

class StudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books= Stud::all();
       return view('book.index1',compact('books')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('book.stud'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $bk= new Stud([
          'name'=>$request->get('name'),
          'class'=>$request->get('class'),
          'course'=>$request->get('course'),
          'college'=>$request->get('college')
      ]);
    

   $bk->save();
   return redirect('/stud/create'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function show(Stud $stud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books =stud::find($id);
        return view('book.edit1', compact('books')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book= Stud::find($id);
       $book->name=$request->get('name');
       $book->class=$request->get('class');
       $book->course=$request->get('course');
       $book->college=$request->get('college');
       $book->save();
       return redirect('/stud'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $book =Stud::find($id);
        $book ->delete();
        return redirect('/stud');   //
    }
}
