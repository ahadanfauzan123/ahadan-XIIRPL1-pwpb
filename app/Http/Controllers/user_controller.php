<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    //
    public function halaman_register()
    {
        return view('layout.register');
    }
    public function simpan_register(Request  $request)
    {
        $data = [
            'nama' => $request->namaLengkap,
            'email' => $request->email,
            'password' => bcrypt($request->NIK)
        ];
        // dd($data);
        User::create($data);
    }
}
//[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]][[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]][[[[]]]]]]][[[[[]]]]]]]]][[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]