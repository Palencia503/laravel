<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class albun extends Model
{
    //
        protected $fillable = [
        'id',
        'nom',
        'quantitat',
        'data'
    ];
}
