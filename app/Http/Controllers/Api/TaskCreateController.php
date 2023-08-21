<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\TaskCreateService;
use Illuminate\Http\Request;

class TaskCreateController extends Controller
{
    public function __construct(private TaskCreateService $taskCreateServices)
    {
    }

    /**
     * Store a newly created resource in storage.
     * @return object respuesta de la creación de datos.
     */
    public function __invoke(Request $request): object
    {
        $request->validate([
            'uuid' => 'required|string|max:36',
            'name' => 'required|string|max:255',
            'status_uuid' => 'required|string|max:36',
            'category_uuid' => 'required|string|max:36',
        ]);

        return ($this->taskCreateServices)($request->all());
    }
}
