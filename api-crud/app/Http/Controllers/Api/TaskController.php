<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use FactoryClass;
use Illuminate\Http\Request;
use Psy\Readline\Interactive\Actions\FallbackAction;

use function Laravel\Prompts\task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Task::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);

        $task = Task::create($request->all());

        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);

        if(!$task){
            return response()->json([
                'succes' => false,
                'message' => 'Data tidak ditemukan',
                'data' => null
            ], 404);
        }

        return response()->json([
            'succes' => true,
            'message' => 'Data berhasil ditemukan',
            'data' => $task
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);

        if(!$task){
            return response()->json([
                'succes' => false,
                'message' => 'Data tidak di temukan',
                'data' => null
            ], 404);
        }

        $request->validate([
            'task' => 'required'
        ]);

        $task->update([
            'task' => $request->task
        ]);

        return response([
            'success' => true,
            'message' => 'Data berhasi di update',
            'data' => $task
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);

        if(!$task){
            return response([
                'success' => false,
                'message' => 'Data tidak ditemukan',
                'data' => null
            ]);
        }

        $task->delete();

        return response()->json([
            'succes' => 'true',
            'message' => 'Data berhasil di hapus',
            'data' => null
        ]);
    }
}
