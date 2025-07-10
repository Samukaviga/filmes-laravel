<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFilmRequest;
use App\Http\Requests\FilmRequest;
use App\Models\Category;
use App\Services\Film\FilmService;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function __construct(FilmService $filmService)
    {
        $this->filmService = $filmService;
    }

     public function index()
    {
        return view('films.index');
    }

    public function dashboard()
    {
        return view('films.dashboard');
    }

    public function create()
    {
        return view('films.create')->with('categories', Category::all());
    }

    public function store(FilmRequest $request)
    {
          
        $this->filmService->store($request->validated());

        return back()->with('success', 'Filme criado com Sucesso!');
        
    }

    public function edit()
    {
        return view('films.edit');
    }

   
}
