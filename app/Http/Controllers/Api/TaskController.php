<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json([
            'success' => true,
            'data' => $tasks
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'uuid' => 'required|string|max:36',
            'name' => 'required|string|max:255',
            'status_uuid' => 'required|string|max:36',
            'category_uuid' => 'required|string|max:36',
        ]);

        $task = Task::create([
            'uuid' => $request->uuid,
            'name' => $request->name,
            'description' => $request->description,
            'status_uuid' => $request->status_uuid,
            'category_uuid' => $request->category_uuid,
        ]);

        return response()->json([
            'success' => true,
            'data' => $task
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json([
            'success' => true,
            'data' => $task
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status_uuid' => 'required|string|max:36',
            'category_uuid' => 'required|string|max:36',
        ]);

        if ($task) {
            $task->update([
                'name' => $request->name,
                'description' => $request->description,
                'status_uuid' => $request->status_uuid,
                'category_uuid' => $request->category_uuid,
            ]);

            return response()->json([
                'success' => true,
                'data' => $task
            ], 200);
        }

        return response()->json([
            'success' => false,
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        if ($task) {
            $task->delete();

            return response()->json([
                'success' => true,
            ], 200);
        }
        return response()->json([
            'success' => false,
        ], 404);
    }
}
