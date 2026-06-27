<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = [
        'camera_id',
        'event_type',
        'message',
        'snapshot'
    ];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }
}
