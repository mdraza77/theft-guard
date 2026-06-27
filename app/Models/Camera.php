<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'source_type',
        'stream_url',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }

    public function protectedObjects()
    {
        return $this->hasMany(ProtectedObject::class);
    }
}
