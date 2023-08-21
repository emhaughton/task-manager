<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Services\Api\TaskUpdateService;
use Illuminate\Http\Request;

class TaskUpdateController extends Controller
{
    public function __construct(
        private TaskUpdateService $taskUpdateServices
    ) {
    }

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
            ($this->taskUpdateServices)($request->all(), $task);
        }

        return $task;
    }
}
