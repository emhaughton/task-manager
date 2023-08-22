<?php

namespace App\Services\Api;

use App\Repositories\Api\StatusRepository;

final class StatusService
{
    public function __construct(private StatusRepository $statusRepository)
    {
    }

    /**
     * Get all status
     *
     * @return object
     */
    public function __invoke(): object
    {
        return  $this->statusRepository->getStatuses();
    }
}
