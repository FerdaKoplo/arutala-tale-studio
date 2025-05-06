<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gambar extends Model
{

    public $fillable = [
        'gambar_banner',
        'gambar_screen',
        'gambar_layout_oc_design',
        'gambar_layout_vtuber_build',
        'gambar_layout_termofservice'
    ];
}
