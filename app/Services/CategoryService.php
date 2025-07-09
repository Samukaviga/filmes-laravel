<?php


namespace App\Services;

use App\DTOs\Category\CreateCategoryDTO;
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

 }