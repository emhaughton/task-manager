<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskDeleteController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function __invoke(Task $task)
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
