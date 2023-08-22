<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\CategoryService;

class CategoryController extends Controller
{
    public function __construct(
        private CategoryService $categoryServices
    ) {
    }

    /**
     * Get all category
     *
     * @return object
     */
    public function __invoke(): object
    {
        return ($this->categoryServices)();
    }
}
