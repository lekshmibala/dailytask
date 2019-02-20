<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharesController extends Controller
{
  public function about()
  {
      return view('shares.about');
  }
  public function service()
  {
      return view('shares.service');
  }
  public function index()
  {
      $title="bala";
      return view('shares.index')->with('name',$title);
  }
}
