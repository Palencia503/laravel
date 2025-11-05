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
        return $this->belongsToMany(Album::class);
    }
    public function Artist1()
    {
        return $this->hasOne(Idioma::class);
    }
    public function Artist2()
    {
        return $this->belongsToMany(Genera::class);
    }
    


}
