<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{
    protected $fillable = [
        'id',
        'nom'
    ];
    public function Idioma()
    {
        return $this->hasOne(Artist::class);
    }
    
}
