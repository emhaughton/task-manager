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
        return  Task::leftJoin('status', 'status.uuid', '=', 'task.status_uuid')
                    ->leftJoin('category', 'category.uuid', '=', 'task.category_uuid')
                    ->select(
                        'task.uuid',
                        'task.name',
                        'status.name as status',
                        'category.name as category',
                        'task.created_at'
                    )
                    ->get();
    }
}
