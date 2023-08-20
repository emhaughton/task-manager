<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskUpdateController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function __invoke(Request $request, Task $task)
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
}
