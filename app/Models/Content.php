<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'name',
        'deskripsi',
        'image',
        'date',
        'user_id',
    ];
}
