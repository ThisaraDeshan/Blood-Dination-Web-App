<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    use HasFactory;

    protected $fillable =[
        'sendername',
        'senderemail',
        'subject',
        'sendermessage',
    ];
}
