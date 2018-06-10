<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blueprint extends Model
{
    public $table = 'blueprints';
    public $fillable = [
        'user_id',
        'name',
        'description',
        'image'
    ];
    public $timestamps = true;
}
