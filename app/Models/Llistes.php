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
    public function usuari()
    {
        return $this->belongsTo(Usuari::class, 'usuari_id');
    }
}
