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

        $request->validate([
            'donername'=>'required|string|max:255|min:5',
            'doneraddress'=>'required|string|max:255|min:5',
            'contactnumber'=>'required|string',
            'donerage'=> 'required|integer',
            'donerlocationlatitude'=>'required',
            'donerbloodtype'=>'required',
            'donerposttitle'=>'required|max:255',
            'donerpostdescrition'=>'required|max:511'
        ]);

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

        return redirect(route('adddonerpost'))->with('success','Details Saved Successfully');
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

    public function search(Request $request){

        if($request->ajax()){

            $data=donerlist::where('donername','like','%'.$request->search.'%')
            ->orwhere('donerbloodtype','like','%'.$request->search.'%')
            ->orwhere('doneraddress','like','%'.$request->search.'%')->get();


            $output='';
        if(count($data)>0){




             $output ='
            <table class="table">
            <thead>
            <tr>
                <th scope="col">Doner Name</th>
                <th scope="col">Doner Blood Type</th>
                <th scope="col">Doner Address</th>
            </tr>
            </thead>
            <tbody>';

                foreach($data as $row){
                    $output .='
                    <tr>
                    <th scope="row">'.$row->donername.'</th>
                    <td>'.$row->donerbloodtype.'</td>
                    <td>'.$row->doneraddress.'</td>
                    </tr>
                    ';
                }



         $output .= '
             </tbody>
            </table>';



        }
        else{

            $output .='No results';

        }

        return $output;

        }




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


        return redirect(route('donerpost'))->with('success','Sent Message Successfully. Thank You! ');
      }



}
