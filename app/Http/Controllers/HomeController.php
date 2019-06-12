<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use DB;


class HomeController extends Controller
{
    public function index(){

      $types = $results = DB::select('select * from types limit 3');
      return view('pages.home')->with('types', $types);
    }
}
