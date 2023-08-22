<?php

namespace App\Repositories\Api;

use App\Models\Category;

final class CategoryRepository
{
    /**
     * Get all category
     *
     * @return Object
     */
    public function getCategories(): Object
    {
        return Category::all();
    }
}
