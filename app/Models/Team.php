<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $fillable = [
        'nama_member',
        'gambar_member',
        'link_sosmed_member'
    ];
}
