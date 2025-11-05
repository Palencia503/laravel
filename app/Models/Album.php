<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Cancion;

class Album extends Model
{
    //
        protected $fillable = [
        'id',
        'nom',
        'quantitat',
        'data'
    ];
    public function canciones()
    {
        return $this->hasMany(Cancion::class);
    }
    public function arttistas()
    {
        return $this->belongsToMany(Artist::class);
    }
}