<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tintuc;
use App\Http\Requests;
class timkiemcontroller extends Controller
{
    public function search(Request $request)
    {
    	$tukhoa = $request ->tukhoa;	
    	// dd($tukhoa);
    	$tintuc = Tintuc::where('tieude','like',"%" .  $tukhoa . "%")->get();
    	// dd($tintuc);
    	return view('timkiem',['tintuc' => $tintuc , 'tukhoa' =>$tukhoa]);
    }

}
