<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\YesNo;

class YesNos extends Controller
{
    public function yes() {
      DB::update('update yes_nos set yes = yes + 1');
      return redirect('/home');
    }

    public function no() {
      DB::update('update yes_nos set no = no + 1');
      return redirect('/need_website');
    }
}
