<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Llistes extends Model
{
    //
    protected $fillable = [
        'id',
        'nom',
        'descripcio',
        'dataCreacio',
        'publica',
        'usuari_id'
    ];
    public function Llistes()
    {
        return $this->belongsToMany(Cancion::class);
    }
    public function Llistes1()
    {
        return $this->hasMany(Usuari::class);
    }
}
