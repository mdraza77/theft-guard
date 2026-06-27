<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProtectedObject extends Model
{
    protected $fillable = [
        'camera_id',
        'name',
        'x',
        'y',
        'width',
        'height'
    ];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }
}
