<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\donerlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $role =auth::user()->role;

        if($role == '0')
        {
            return view('donerhome');
        }
        if($role == '1')
        {
            $posts = donerlist::all();

            return view('donerpost',compact('posts'));

        }
        else
        {
            $posts =user::all();
            return view('adminhome',compact('posts'));
        }

    }

    public function donerpost()
    {
        $posts = donerlist::all();

        return view('donerpost',compact('posts'));
    }

    public function adddonerpost()
    {
        return view('donerhome');
    }

    public function aboutus()
    {
        return view('about-us');
    }

    public function contactus()
    {
        return view('Contact-Us');
    }

    public function location()
    {
        $posts =donerlist::all();
        return view('location',compact('posts'));
    }

    public function admindonerposts()
    {
        $posts = donerlist::all();
        return view('admindonerposts',compact('posts'));
    }



}


