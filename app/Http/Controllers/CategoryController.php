<?php

namespace App\Http\Controllers;

use App\DTOs\Category\CreateCategoryDTO;
use App\DTOs\Category\UpdateCategoryDTO;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected CategoryService $service;

     public function __construct(CategoryService $service)
     {
        $this->service = $service;
     }


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
    
    public function store(CategoryRequest $request)
    {   
        $dto = CreateCategoryDTO::fromArray($request->validated());
        $category = $this->service->store($dto);

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
        
        $dto = UpdateCategoryDTO::fromArray($request->validated());
        $this->service->update($dto, $category);

        return redirect()->route('category.index')->with('success',"categoria $category->name, atualizada com sucesso.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $category->delete();

        return back()->with('success', 'Categoria excluida com sucesso');
    }
}
