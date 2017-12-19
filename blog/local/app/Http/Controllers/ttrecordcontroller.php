<?php

namespace App\Http\Controllers;
use App\Tintuc;
use Illuminate\Http\Request;
use Validator;
class ttrecordcontroller extends Controller
{
    public function add( Request $request){


        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.'
            ];
            
        $validator = Validator::make($request->all(), [
            'tieude'     => 'required|',
            'noidung'    => 'required|'
            
           

        ],$messages);

        if ($validator->fails()) {
           return redirect('text')
                    ->withErrors($validator)
                    ->withInput();
                     
                }
      else{          
  
    	$tintuc = new Tintuc();
    	
    	$tintuc->tieude = $request->tieude;

    	$tintuc->noidung = $request->noidung;
    	$tintuc->save();
    return redirect('/pro')	;	}

    }
}
