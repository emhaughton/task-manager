<?php

namespace App\Repositories\Api;

use App\Models\Task;

final class TaskDeleteRepository
{
    /**
     * Elimina la tarea
     * @param Task $task objecto a eliminar
     *
     * @return bool
     */
    public function delete(Task $task): bool
    {
        return $task->delete();
    }
}
