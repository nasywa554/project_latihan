<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
        $siswa = DB::table('siswa')->get();
        return view('siswa', compact('siswa'));
    }
    
    // method untuk menampilkan view form tambah siswa
    public function tambah()
    {
 
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table siswa
    public function store(Request $request)
    {
        // insert data ke table siswa
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            
        ]);
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    
    }

    // method untuk edit data siswa
    public function edit($id)
    {
        // mengambil data siswa berdasarkan id yang dipilih
        $siswa = DB::table('siswa')->where('id',$id)->get();
        // passing data siswa yang didapat ke view edit.blade.php
        return view('edit', compact('siswa'));

    }

    // update data siswa
    public function update(Request $request)
    {
        // update data siswa
        DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email
            
        ]);
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }

    // method untuk hapus data siswa
    public function hapus($id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
        DB::table('siswa')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }

}   
    