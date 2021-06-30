<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'long_name',
        'slug',
        'area',
        'organizer',
        'link_website',
        'location',
        'date',
    ];

    // public function users() {
    //     return $this->belongsToMany(User::class)->withPivot('')
    // }
}
