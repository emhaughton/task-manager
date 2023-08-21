<?php

namespace App\Services\Api;

use App\Repositories\Api\TaskListRepository;
use Illuminate\Support\Collection;

final class TaskListService
{
    public function __construct(private TaskListRepository $taskListRepository)
    {
    }

    /**
     * Listado de todas las tareas
     * @return Collection
     */
    public function __invoke(): Collection
    {
        return  $this->taskListRepository->list();
    }
}
