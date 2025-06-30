<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFilmRequest;
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
        return view('filmes.index');
    }

    public function create()
    {
        $mensagemSucesso = session('mensagem-sucesso');

        return view('filmes.create')->with('categories', Category::all())->with('mensagemSucesso', $mensagemSucesso);
    }

    public function store(CreateFilmRequest $request)
    {
          
        $this->filmService->store($request->validated());

        return back()->with('mensagemSucesso', 'Filme criado com Sucesso!');
        
    }

    public function edit()
    {
        return view('filmes.edit');
    }

    public function show()
    {
        return view('filmes.show');
    }
}
