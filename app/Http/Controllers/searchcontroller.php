<?php

namespace App\Http\Controllers;

use App\Models\donerlist;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class searchcontroller extends Controller
{
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
                    <th class="text-center" scope="col" style="color:#fff;">Doner Name</th>
                    <th class="text-center" scope="col" style="color:#fff;">Doner Blood Type</th>
                    <th class="text-center" scope="col" style="color:#fff;">Doner Address</th>
                    <th class="text-center" scope="col" style="color:#fff;">Action</th>
                    <th class="text-center" scope="col" style="color:#fff;"></th>
                </tr>
                </thead>
                <tbody>';

                    foreach($data as $row){
                        $output .='
                        <tr>
                        <th class="text-center" style="color:#fff;" scope="row">'.$row->donername.'</th>
                        <td class="text-center" style="color:#fff;" >'.$row->donerbloodtype.'</td>
                        <td class="text-center" style="color:#fff;" >'.$row->doneraddress.'</td>
                        <td><a style="width:100%;" href="" class="m-1 btn btn-primary btn-sm">Inform Donor</a></td>
                        <td><a style="width:100%;" href="location" class="m-1 btn btn-success btn-sm">View Location</a></td>
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
}
