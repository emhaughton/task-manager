<?php

namespace App\Services\Api;

use App\Models\Task;
use App\Repositories\Api\TaskUpdateRepository;

final class TaskUpdateService
{
    public function __construct(private TaskUpdateRepository $taskUpdateRepository)
    {
    }

    /**
     * @param array $data valores del formulario
     * @param Task $task Objecto a actualizar
     * @return bool
     */
    public function __invoke(array $data, Task $task): bool
    {
        return  $this->taskUpdateRepository->update($data, $task);
    }
}
