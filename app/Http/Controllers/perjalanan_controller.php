<?php

namespace App\Http\Controllers;

use App\Models\perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perjalanan_controller extends Controller
{
    public function index()
    {
        $data = DB::table('perjalanans')
        ->join('users', 'users.id', '=', 'perjalanans.id_user')
        ->select('users.nama', 'perjalanans.tanggal', 'perjalanans.jam', 'perjalanans.lokasi', 'perjalanans.suhu')
        // ->where('users.name', '=', 'auth()->user()->name')
        ->get();
        return view('layout.pompt', ['data' => $data]);
    }
    public function simpan_perjalanan(Request $request)
    {
        $data = [
            'id_user' => $request->id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi,
            'suhu' => $request->suhu
        ];
        //menambahkan data ke dalam model kemudian ditambah ke database
        perjalanan::create($data);
        // dd($data);
        return view('layout.pompt');
        
    }
}
