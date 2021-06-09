<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'area',
        'score',
        'institute',
        'publisher',
        'link_website',
        'address',
        'district',
        'email',
        'phone',
        'photo',
    ];
}
