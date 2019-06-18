<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use DB;


class HomeController extends Controller
{
    public function index(){

      $types = DB::select('select * from types limit 3');
      $posts = DB::select('select * from posts limit 3');
      return view('pages.home', compact(['types','posts']));
    }
}
