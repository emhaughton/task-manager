<?php

namespace App\Services\Api;

use App\Repositories\Api\CategoryRepository;

final class CategoryService
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
    }

    /**
     * Get all category
     *
     * @return object
     */
    public function __invoke(): object
    {
        return  $this->categoryRepository->getCategories();
    }
}
