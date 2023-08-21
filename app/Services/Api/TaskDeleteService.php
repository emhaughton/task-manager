<?php

namespace App\Services\Api;

use App\Models\Task;
use App\Repositories\Api\TaskDeleteRepository;

final class TaskDeleteService
{
    public function __construct(private TaskDeleteRepository $taskDeleteRepository)
    {
    }

    /**
     * @param Task $task Objecto a eliminar
     * @return bool
     */
    public function __invoke(Task $task): bool
    {
        return  $this->taskDeleteRepository->delete($task);
    }
}
