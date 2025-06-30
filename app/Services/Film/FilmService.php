<?php

namespace App\Services\Film;

use App\Models\Film;

class FilmService 
{


    public function store($data)
    {
       
             #$imagePath = $request->hasFile('image') ? $request->file('image')->store('film_image', 'public') : $imagePath = null; //armazena em um lugar permanente. O Laravel cria uma pasta com o nome 'series_cover' e retorna o caminho salvo e salva em public (config/filesystems)        

        $imagePath = $data['image'] ? $data['image']->store('film_image', 'public') : $imagePath = null;
        $data['image'] = $imagePath;


        return Film::create([
            'name' => $data['name'],
            'categories_id' => $data['category'],
            'image' => $data['image'],
        ]);


        // $request->coverPath = $coverPath;

    }


}
