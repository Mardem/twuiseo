<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestTime extends Model
{
    protected $fillable = [
        'created_at',
        'updated_at'
    ];
}
