<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kabinet',
        'periode',
        'slogan',
        'deskripsi',
        'sambutan',
        'pendamping',
        'visi',
        'misi',
    ];
}
