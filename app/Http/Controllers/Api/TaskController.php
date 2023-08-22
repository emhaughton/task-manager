<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Services\Api\TaskService;

class TaskController extends Controller
{
    public function __construct(
        private TaskService $taskServices
    ) {
    }

    /**
     * Get data manager
     *
     * @param Task $task Data manager
     *
     * @return Task
     */
    public function __invoke(Task $task): Task
    {
        return ($this->taskServices)($task);
    }
}
