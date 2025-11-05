<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artista_genera extends Model
{
    protected $fillable = [
        'id',
        'artista_id',
        'genera_id'

    ];
    public function Artist()
    {
        return $this->belongsTo(Artist::class, 'artista_id');
    }

    public function Genera()
    {
        return $this->belongsTo(Genera::class, 'genera_id');
    }
}


