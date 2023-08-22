<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\StatusService;

class StatusController extends Controller
{
    public function __construct(
        private StatusService $statusServices
    ) {
    }

    /**
     * Get all status
     *
     * @return object
     */
    public function __invoke(): object
    {
        return ($this->statusServices)();
    }
}
