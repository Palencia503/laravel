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
    public function genera()
    {
        return $this->belongsTo(Genera::class, 'genera_id');
    }

    public function albun()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}
