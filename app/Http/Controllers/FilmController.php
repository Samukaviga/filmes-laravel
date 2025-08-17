<?php

namespace App\Http\Controllers;

use App\DTOs\Film\CreateFilmDTO;
use App\DTOs\Film\UpdateFilmDTO;
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
        return view('films.index', ['films' => Film::orderBy('name')->paginate(10)]);
    }

    public function dashboard()
    {
        return view('films.dashboard', ['films' => Film::all()]);
    }

    public function description(Film $film) 
    {
        return view('films.description', ['film' => $film]);
    }

    public function create()
    {   
        return view('films.create', ['categories' => Category::orderBy('name')->get()]);
    }

    public function store(FilmRequest $request)
    {

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('film_image', 'public')
            : null;

        $dto = CreateFilmDTO::fromArray([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
            'category' => $request->category
        ]);

        $film = $this->filmService->store($dto);

        return back()->with('success', "Filme: $film->name criado com Sucesso!");

    }

    public function edit(Film $film)
    {
        return view('films.edit', ['film' => $film, 'categories' => Category::all()]);
    }

    public function update(FilmRequest $request, Film $film)
    {

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('film_image', 'public');
        } else {
            $validated['image'] = '';
        }

        $dto = UpdateFilmDTO::fromArray($validated);

        $this->filmService->update($dto, $film);

        return back()->with('success', 'Filme atualizado com sucesso!');
    }


    public function destroy(Film $film)
    {

        $this->filmService->destroy($film);

        return back()->with('success', 'Filme excluido com sucesso!');

    }


}
