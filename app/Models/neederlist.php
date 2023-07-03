<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class neederlist extends Model
{
    use HasFactory;
    protected $fillable=[

        'needername',
        'neederaddress',
        'needercontactnumber',
        'neederage',
        'neederlocation',
        'neederbloodtype',
    ];
}
