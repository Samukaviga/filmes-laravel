<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('filmes.index');
    }

    public function create()
    {
        $mensagemSucesso = session('mensagem-sucesso');

        return view('filmes.create')->with('categories', Category::all())->with('mensagemSucesso', $mensagemSucesso);
    }

    public function store(Request $request)
    {

       // dd($request->all());

        $validated = $request->validate([
            'name' => 'required',
            'catogory' => 'required',
        ]);

        return redirect('/novo')->with('mensagemSucesso', 'Blog editado com Sucesso!');

       
        //   $coverPath = $request->hasFile('cover') ? $request->file('cover')->store('series_cover', 'public') : $coverPath = null; //armazena em um lugar permanente. O Laravel cria uma pasta com o nome 'series_cover' e retorna o caminho salvo e salva em public (config/filesystems)

        // $request->coverPath = $coverPath;
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
