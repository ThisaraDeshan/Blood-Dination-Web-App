<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratings extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'raterId',
        'rating',
        'review',
        'status'
    ];

}
