<?php

namespace App\Services\Api;

use App\Repositories\Api\TaskCreateRepository;
use App\Models\Task;

final class TaskCreateService
{
    public function __construct(private TaskCreateRepository $taskCreateRepository)
    {
    }

    /**
     * @param array $data valores a guardar del formulario
     * @return Task
     */
    public function __invoke(array $data): Task
    {
        return $this->taskCreateRepository->create($data);
    }
}
