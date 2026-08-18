<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Cache\Events\CacheFlushing;
use Illuminate\Http\Request;

use function Laravel\Prompts\title;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tadi kamu nulisnya Post::All() pakai A besar, biasakan pakai a kecil
        return response()->json(Post::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::create($request->all());
        
        return response()->json($post, 201);
    }

    public function show($id)
    {
        $post = Post::find($id);
        
        if(!$post){
            return response()->json([
                "succes" => false,
                "message" => "Data tidak ditemukan",
                "data" => null
            ], 404);
        }

        return response()->json([
            "succes" => true,
            "message" => "Data berhasil ditemukan",
            "data" => $post
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post){
            return response()->json([
                "succes" => false,
                "message" => "Data tidak ditemukan",
                "data" => null
            ], 404);
        }

        $request->validate([
            "title" => 'required|string|max:255',
            "content" => "required|string|max:255"
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return response()->json([
            'succes' => true,
            'message' => "Data berhasil di ubah",
            'Data' => $post
        ]);
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post){
            return response()->json([
                "succes" => false,
                "message" => "Data tidak ditemukan",
                "data" => null
            ], 404);
        }

        $post->delete();

        return response()->json([
            'succes' => true,
            'message' => 'Data berhasil di hapus',
            'data' => null
        ]);
    }
}