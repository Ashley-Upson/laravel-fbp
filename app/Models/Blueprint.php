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
        'image',
        'bp_string'
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
