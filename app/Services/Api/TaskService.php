<?php

namespace App\Services\Api;

use App\Repositories\Api\TaskRepository;
use Illuminate\Support\Collection;
use App\Models\Task;

final class TaskService
{
    public function __construct(private TaskRepository $taskRepository)
    {
    }

    /**
     * Get data manager
     *
     * @param Task $task Data manager
     * @return Task
     */
    public function __invoke(Task $task): Task
    {
        return  $this->taskRepository->getManager($task);
    }
}
