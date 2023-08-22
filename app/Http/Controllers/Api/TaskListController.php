<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\TaskListService;
use Illuminate\Support\Collection;

class TaskListController extends Controller
{
    public function __construct(
        private TaskListService $taskListServices
    ) {
    }

    /**
     * Lista todos las tareas de la base datos
     *
     * @return collection
     */
    public function __invoke(): Collection
    {
        return ($this->taskListServices)();
    }
}
