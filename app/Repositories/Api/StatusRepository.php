<?php

namespace App\Repositories\Api;

use App\Models\Status;

final class StatusRepository
{
    /**
     * Get all status
     *
     * @return Object
     */
    public function getStatuses(): Object
    {
        return Status::all();
    }
}
