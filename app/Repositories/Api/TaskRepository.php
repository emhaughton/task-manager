<?php

namespace App\Repositories\Api;

use App\Models\Task;
use Illuminate\Support\Collection;

final class TaskRepository
{
    /**
     * Get data manager
     *
     * @param Task $task Data manager
     * @return Task
     */
    public function getManager(Task $task): Task
    {
        return  Task::where('task.uuid', $task->uuid)
                    ->first();
    }
}
