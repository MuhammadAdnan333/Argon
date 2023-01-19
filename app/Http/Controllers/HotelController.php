<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Employee;
use App\Http\Controllers\PageController;


class HotelController extends Controller
{
    
   public function list(){
    
    $data = Member::paginate(5);
    return view('hotel',['members'=>$data]);
    }
    function destroy($id){
        Member::find($id)->delete();
        return redirect('hotel'); 
    }
    function showData($id){
             $data =  Member::find($id);
             return view('edit',['data'=>$data]);
    }
    function update( Request $req){
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        return redirect('hotel'); 
    }
    function addData(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('hotel');
        
    }

}
 




























