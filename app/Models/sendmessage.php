<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendmessage extends Model
{
    use HasFactory;

    protected $fillable=[

        'neederid',
        'postdonerid',
        'needername',
        'needermessage'
    ];
}
