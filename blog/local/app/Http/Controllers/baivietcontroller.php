<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tintuc;

use App\Http\Requests;

class baivietcontroller extends Controller
{
     public function show($id) {
      $users = Tintuc::find($id);
      return view('baiviet',['users'=>$users]);
    }
    
}
