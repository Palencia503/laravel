<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genera extends Model
{
    //
    protected $fillable = [
        'id',
        'nom'

    ];
    public function Genera()
    {
        return $this->belongsToMany(Artist::class);
    }
    public function Genara1()
    {
        return $this->hasOne(Cancions::class);
    }

}
