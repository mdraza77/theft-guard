<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $fillable = [
        'name',
        'source_type',
        'stream_url',
        'status'
    ];

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }

    public function protectedObjects()
    {
        return $this->hasMany(ProtectedObject::class);
    }
}
