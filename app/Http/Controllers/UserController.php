<?php

namespace App\Http\Controllers;
use App\IncidentType;
use App\Incident;
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
        $complaint->save();
        return redirect('/user');
    }
}
