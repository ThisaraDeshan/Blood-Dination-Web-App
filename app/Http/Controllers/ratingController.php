<?php

namespace App\Http\Controllers;

use App\Models\ratings;
use Illuminate\Http\Request;

class ratingController extends Controller
{
    public function addRating($id , Request $request){

        ratings::create([

            'userId' => auth()->user()->id,
            'raterId' => $id,
            'rating' => $request->input('rating'),
            'review' => $request->input('reviewComment')

        ]);
        return redirect(route('donerRatings',['id' => $id]))->with('success','Doner Rated Successfully. Thank You...! ');
    }
}
