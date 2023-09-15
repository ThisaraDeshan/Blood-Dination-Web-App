<?php

namespace App\Http\Controllers;

use App\Models\sendmessage;
use App\Models\User;
use App\Models\donerlist;
use App\Models\ratings;
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

        if($role == 'Blood Donor')
        {
            return view('donerhome');
        }
        if($role == 'Blood Needer')
        {
            $posts = donerlist::all();

            return view('neederhome',compact('posts'));

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

    public function notifications()
    {
        $rows = sendmessage::orderBy('id','desc')->take(10)->get();


        return view('notifications', compact('rows'));
    }

    public function bestDonors()
    {
        $posts = User::where('role','Blood Donor')->get();
        $donors = donerlist::all();

        return view('bestDonors',compact('posts','donors'));
    }

    public function neederhome()
    {
        $posts = donerlist::all();
        return view('neederhome',compact('posts'));
    }

    public function neederAbout()
    {
        return view('neederAbout');
    }

    public function neederContact()
    {
        return view('neederContact');
    }

    public function donerRatings($id)
    {
        $user = User::where('id',$id)->first();
        $values = ratings::where('raterId',$id)->pluck('rating');
        $ratingAvg = $values->avg();
        $value5 = ratings::where('raterId',$id)->where('rating',5)->count();
        $value4 = ratings::where('raterId',$id)->where('rating',4)->count();
        $value3 = ratings::where('raterId',$id)->where('rating',3)->count();
        $value2 = ratings::where('raterId',$id)->where('rating',2)->count();
        $value1 = ratings::where('raterId',$id)->where('rating',1)->count();
        $posts = ratings::where('raterId',$id)->get();


        return view('donerRatings',compact('user','ratingAvg','value5','value4','value3','value2','value1','posts'));
    }

}


