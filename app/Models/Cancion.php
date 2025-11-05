<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $fillable = [
        'id',
        'nom',
        'durada',
        'views',
        'tipus',
        'genera_id',
        'album_id'

    ];
    public function Cancion()
    {
        return $this->belongsToMany(Llistes::class);
    }
    public function cancions1()
    {
        return $this->hasMany(Genera::class);
    }
    
}
