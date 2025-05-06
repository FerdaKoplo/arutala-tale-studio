<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VtuberBuild extends Model
{
    protected $fillable = [
        'video_url'
    ];

    public function setVideoUrlAttribute($value)
    {
    if (empty($value)) {
        $this->attributes['video_url'] = null;
        return;
    }
    if (preg_match('/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $value, $matches)) {
        $videoId = $matches[1];
        $this->attributes['video_url'] = "https://www.youtube.com/embed/{$videoId}";
    } else {
        $this->attributes['video_url'] = null; // Store NULL if invalid
    }
    }
}
