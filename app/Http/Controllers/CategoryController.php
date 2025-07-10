<?php

namespace App\Http\Controllers;

use App\DTOs\Category\CreateCategoryDTO;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return view('categories.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }
    
    public function store(CategoryRequest $request, CategoryService $service)
    {   
        $dto = CreateCategoryDTO::fromArray($request->validated());
        $category = $service->store($dto);

        return back()->with('success', "Categoria $category->name criada com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')->with('success',"categoria $category->name, criada com sucesso.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
