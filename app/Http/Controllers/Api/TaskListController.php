<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $tasks = Task::all();
        return response()->json([
            'success' => true,
            'data' => $tasks
        ], 200);
    }
}
