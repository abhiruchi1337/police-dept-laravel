<?php

namespace App\Http\Controllers;
use App\IncidentType;
use App\Incident;
use Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function newcomplaint(Request $request){
        $noncog=IncidentType::where('id','>=',3)->get();
        return view('lodgecomplaint')->with('noncog',$noncog);
    }
    public function lodgecomplaint(Request $request){
        // return $request;
        $complaint=new Incident();
        $complaint->i_date=$request->input('DOI');
        $complaint->i_desc=$request->input('details');
        $complaint->status='ongoing';
        $complaint->a_id=1;
        $complaint->i_type=intval($request->input('type'));
        $complaint->lodged_by=Auth::user()->id;
        $complaint->save();
        return redirect('/user');
    }
    public function viewcomplaints(Request $request){
        $complaints=Incident::where('lodged_by','=',Auth::user()->id)->get();
        return view('user_my_complaints')->with('cmp',$complaints);
    }
    public function showComplaint($cid){
        $complaint=Incident::where('i_id','=',$cid)->first();
        return view('singleincident')->with('complaint',$complaint);
    }


}
