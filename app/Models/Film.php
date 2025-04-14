<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "films";

    protected $fillable = ['name', 'image', 'categories_id'];


    public function category()
    {

        return $this->belongsTo(Category::class, 'categories_id');
    }
}
