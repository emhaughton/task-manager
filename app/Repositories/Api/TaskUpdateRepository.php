<?php

namespace App\Repositories\Api;

use App\Models\Task;

final class TaskUpdateRepository
{
    /**
     * Guarda los datos de la tarea
     * @param array $data Datos de la tarea
     * @param Task $task objecto a actualizar
     *
     * @return bool
     */
    public function update(array $data, Task $task): bool
    {
        return $task->update($data);
    }
}
