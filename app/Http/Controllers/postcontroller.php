<?php

namespace App\Http\Controllers;

use App\Models\contactus;
use App\Models\donerlist;
use App\Models\neederlist;
use App\Models\sendmessage;
use App\Models\User;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function donerstore(Request $request)
    {
        donerlist::create([
            'userid'=>auth()->user()->id,
            'donername' => $request->donername,
            'doneraddress' => $request->doneraddress,
            'contactnumber' => $request->donercontactnumber,
            'donerage' => $request->donerage,
            'donerlocationlatitude' => $request->donerlocationlatitude,
            'donerbloodtype' => $request->donerbloodtype,
            'donerposttitle' => $request->donerposttitle,
            'donerpostdescription' =>$request->donerpostdescription,
        ]);

        return redirect(route('donerpost'))->with('success','Details Saved Successfully');
    }

    public function neederstore(Request $request)
    {
        neederlist::create([

            'needername' =>$request->needername,
            'neederaddress' => $request->neederaddress,
            'needercontactnumber' =>$request->needercontactnumber,
            'neederage' => $request->neederage,
            'neederlocation' => $request->neederlocation,
            'neederbloodtype' => $request->neederbloodtype,
        ]);

        return redirect(route('index'))->with('success','Blood Needer Saved Successfully');
    }

      public function contactusmessage(Request $request)
      {
        contactus::create([
            'sendername' =>$request->sendername,
            'senderemail' =>$request->senderemail,
            'subject' =>$request->subject,
            'sendermessage' =>$request->sendermessage,
        ]);

        return redirect(route('contactus'))->with('success','Sent Message Successfully. Thank You! ');
      }

      public function sendMessage($userid)
      {

        sendmessage::create([
            'neederid' => auth()->user()->id,
            'postdonerid' => $userid,
            'needername' => auth()->user()->name,
            'needermessage' => "I need blood donation.please help..."
        ]);


        return redirect(route('neederhome'))->with('success','Sent Message Successfully. Thank You! ');
      }



}
