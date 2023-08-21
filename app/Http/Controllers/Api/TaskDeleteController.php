<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Services\Api\TaskDeleteService;

class TaskDeleteController extends Controller
{
    public function __construct(private TaskDeleteService $taskDeleteService)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function __invoke(Task $task): void
    {
       ($this->taskDeleteService)($task);
    }
}
