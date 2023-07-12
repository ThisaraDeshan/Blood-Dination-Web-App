<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donerlist extends Model
{
    use HasFactory;

    protected $fillable =[
        'userid',
        'donername',
        'doneraddress',
        'contactnumber',
        'donerage',
        'donerlocationlatitude',
        'donerlocationlongitude',
        'donerbloodtype',
        'donerposttitle',
        'donerpostdescription',

    ];
}
