<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cançons_llistes extends Model
{
    protected $fillable = [
        'id',
        'llistes_id',
        'cancions_id'

    ];
    public function canço()
    {
        return $this->belongsTo(Cançons::class, 'cançons_id');
    }

    public function llista()
    {
        return $this->belongsTo(Llista::class, 'llistes_id');
    }
}


