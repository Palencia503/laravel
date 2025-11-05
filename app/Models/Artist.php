<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $fillable = [
        'id',
        'nom',
        'cognom',
        'nomArtistic',
        'nacionalitat',
        'idiomaPredominant',
        'dataNaixement',
        'seguidors'
    ];
    public function Artist()
    {
        return $this->belongsTo(Artist::class, 'artista_id');
    }

    public function Album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}
