<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artista_album extends Model
{
    protected $fillable = [
        'id',
        'artista_id',
        'album_id'

    ];
    

}


