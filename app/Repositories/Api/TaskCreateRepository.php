<?php

namespace App\Repositories\Api;

use App\Models\Task;

final class TaskCreateRepository
{
    /**
     * Guarda los datos de la tarea
     * @param array $data Datos de la tarea
     *
     * @return Task
     */
    public function create(array $data): Task
    {
        return Task::create($data);
    }
}
