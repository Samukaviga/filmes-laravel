<?php


namespace App\Services;

use App\DTOs\Category\CreateCategoryDTO;
use App\DTOs\Category\UpdateCategoryDTO;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService 
{

    public function store(CreateCategoryDTO $dto)
    {
        return DB::transaction(function () use ($dto) { 
            return Category::create($dto->toArray());
        });
    }

    public function update(UpdateCategoryDTO $dto, Category $category)
    {
        return DB::transaction(function () use ($dto, $category) {
            return $category->update($dto->toArray());
        });
    }

 }