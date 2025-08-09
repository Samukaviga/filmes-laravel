<?php

namespace App\Services;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmService 
{


    public function store($data)
    {

        return Film::create([
            'name' => $data->name,
            'categories_id' => $data->category,
            'image' => $data->image,
        ]);

    }

    public function destroy(Film $film)
    {
        Storage::disk('public')->delete($film->image);

        $film->delete();

    }


}
