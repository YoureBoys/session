<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // menampilkan isi session
    public function tampilkanSession(Request $request) {
        if ($request->session()->has('nama')&($request->session()->has('kelas'))&($request->session()->has('alamat'))){
            echo $request->session()->get('nama');
            echo $request->session()->get('kelas');
            echo $request->session()->get('alamat');
        }else{
            echo 'Tidak ada tampilan pada session.';
        }
    }
    //Membuat session
    public function buatSession(Request $request){
        $request->session()->put('nama','Kalew <br> ');
        $request->session()->put('kelas','XII_RPL <br> ');
        $request->session()->put('alamat','Tebet');
        echo 'Data telah ditambahkan ke session.';
    }
    //Menghapus sesion
    public function hapusSession(Request $request){
        $request->session()->forget('nama');
        echo 'Data telah ditambahkan ke session.';
    }
}
