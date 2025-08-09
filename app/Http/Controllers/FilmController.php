<?php

namespace App\Http\Controllers;

use App\DTOs\Film\CreateFilmDTO;
use App\Http\Requests\CreateFilmRequest;
use App\Http\Requests\FilmRequest;
use App\Models\Category;
use App\Models\Film;
use App\Services\FilmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    protected $filmService;

    public function __construct(FilmService $filmService)
    {
        $this->filmService = $filmService;
    }

     public function index()
    {
        return view('films.index', ['films' => Film::all()]);
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

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('film_image', 'public')
            : null;
        
            $dto = CreateFilmDTO::fromArray([
                'name' => $request->name,
                'image' => $imagePath,
                'category' => $request->category
            ]);

        $film = $this->filmService->store($dto);
        
        return back()->with('success', "Filme: $film->name criado com Sucesso!");
        
    }

    public function edit()
    {
        return view('films.edit');
    }

    public function destroy(Film $film)
    {

        $this->filmService->destroy($film);

        return back()->with('success', 'Filme excluido com sucesso!');

    }

   
}
