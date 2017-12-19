<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use DB;
use bcrypt;

class Registercontroller extends Controller
{
    //
    public function showRegisterForm(){
        return view('fontend.register');
    }

    public function storeUser(Request $request){
        //dd($request->all());

        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.',
            'email'    => 'Trường :attribute phải có định dạng email'
        ];
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:255',
            'email'    => 'required|email',
            'password' => 'required|min:8|confirmed',
           

        ],$messages);

        if ($validator->fails()) {
           return redirect('dangky')
                    ->withErrors($validator)
                    ->withInput();
                     
                }
                     else {
    
            $name = $request->input('name');
            $email = $request->input('email');
            $password = bcrypt($request->input('password'));
            
           

            DB::insert('insert into student (name, email, password) values (?, ?, ?)', [$name, $email, $password]);
            echo " Đăng Ký thành công !xin vui lòng đăng nhập";
           return view('dangnhap1');
        }
    }

}