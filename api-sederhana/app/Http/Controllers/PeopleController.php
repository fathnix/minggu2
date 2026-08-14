<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    private $people = [
        ["id" => 1, "Nama" => "Fatih", "Role" => "BE"],
        ["id" => 2, "Nama" => "Yogi", "Role" => "FE"],
        ["id" => 3, "Nama" => "Hanif", "Role" => "UI/UX"]
    ];

    public function index(){
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil mengambil data People',
            'data' => $this->people
        ]);
    }

    public function show($id){
        $data = collect($this->people)->firstWhere('id', (int)$id);

        if(!$data){
            return response()->json([
                'status' => 'Not found',
                'message' => 'Data tidak di temukan'
            ], 404);
        }

        return response()->json([
            'status' => 'Succces',
            'message' => 'Data di temukan',
            'data' => $data
        ]);
    }
}
