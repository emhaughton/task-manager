<?php

namespace App\Repositories\Api;

use App\Models\Task;
use Illuminate\Support\Collection;

final class TaskListRepository
{
    /**
     * Listado de todos las tareas
     *
     * @return Collection
     */
    public function list(): Collection
    {
        return Task::all();
    }
}
