<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    // read
    public function index(){
        // mengambil data dari session, jika kosong guanakan array kososng[]
        $task = session()->get('tasks', []);

        // kirim data task ke file view brsama todo 
        return view('todo', compact('task'));
    }

    // tambah 
    public function store(Request $request){
        $request->validate([
            'nama_tugas' => 'required'
        ]);
        // masukan nama tugas ke dalam 'task'
        session()->push('task', $request->nama_tugas);

        // dd($request->all());

        // Kembalikan pengguna ke halaman sebelumnya
        return redirect()->back();
    }

    public function destroy(){
        // untuk mengambil semua data tugas
        $task = session()->get('task', []);

        // meghaus tugas berdasarkan id
        unset($task['$id']);

        // siman kembali array yang sudah di hapus ke dalam session
        session()->put('task'. $task);

        return ridrect()->back();
    }
}
