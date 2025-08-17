<?php

namespace App\Services;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilmService
{


    public function store($data)
    {

        return DB::transaction(function () use ($data) {
            return Film::create([
                'name' => $data->name,
                'description' => $data->description,
                'categories_id' => $data->category,
                'image' => $data->image,
            ]);
        });

    }

    public function update($data, Film $film)
    {

        if($data->image !== ''){
            Storage::disk('public')->delete($film->image);
        }

        return DB::transaction(function () use ($data, $film) {
            return $film->update([
                'name' => $data->name,
                'description' => $data->description,
                'category' => $data->category,
                'image' => $data->image !== '' ? $data->image : $film->image
            ]);
        });

    }

    public function destroy(Film $film)
    {
        Storage::disk('public')->delete($film->image);
        $film->delete();

    }


}
