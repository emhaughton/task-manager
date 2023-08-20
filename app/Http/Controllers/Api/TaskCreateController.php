<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskCreateController extends Controller
{
    /**
     * Store a newly created resource in storage.
    */
    public function __invoke(Request $request)
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
}
