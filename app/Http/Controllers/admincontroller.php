<?php

namespace App\Http\Controllers;

use App\Models\donerlist;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class admincontroller extends Controller
{

    public function userdelete($id)
    {
        User::findOrfail($id)->delete();

        return redirect(route('dashboard'));
    }

    public function postdelete($id)
    {
        donerlist::findOrfail($id)->delete();

        return redirect(route('admindonerposts'));
    }
}
