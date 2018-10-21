<?php

namespace App\Http\Controllers;
use App\Incident;
use App\Person;
use Auth;
use App\IncidentType;
use App\OfficerIncident;
use App\PersonIncident;
use App\Area;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index(){
        return view('officer.jr_police_main')->with('pending',Incident::where('status','=','ongoing')->take(5)->get());
    }
    public function viewCases(Request $request){
        $complaints=Incident::paginate(10);
        return view('officer.jr_police_all_cases')->with('cmp',$complaints);
    }
    public function showCase($cid){
        $complaint=Incident::where('i_id','=',$cid)->first();
        return view('officer.inctype')->with('complaint',$complaint);
    }
    public function newCase(){
        
            $ctype=IncidentType::all();
            $areas=Area::all();
            return view('lodgecomplaint')->with('ctype',$ctype)->with('areas',$areas);
        
    }
    public function lodgecomplaint(Request $request){
        // return $request;
        $complaint=new Incident();
        $complaint->i_date=$request->input('DOI');
        $complaint->i_desc=$request->input('details');
        $complaint->status='ongoing';
        $complaint->a_id=intval($request->input('area'));
        $complaint->i_type=intval($request->input('type'));
        $complaint->lodged_by=Auth::user()->id;
        $complaint->save();
        // return $complaint->id;
        if($request->input('vname')!=''||($request->input('suspectname')!='')){
            if($request->input('vname')!=''){
                $victim=new Person();
                $v=Person::where('aadhar',$request->input('aadhar'))->first();
                if (!isset($v)){
                    $victim->p_name=$request->input('vname');
                $victim->aadhar=$request->input('aadhar');
                $victim->address=$request->input('address');
                $victim->save();
                $vinc=new PersonIncident();
                $vinc->i_id=$complaint->i_id;
                $vinc->p_id=$victim->p_id;
                $vinc->save();
                }
                else{
                    $vinc=new PersonIncident();
                $vinc->i_id=$complaint->i_id;
                $vinc->p_id=$v->p_id;
                $vinc->save();
                }
                
                
            }
            if($request->input('suspectname')!=''){
                $suspect=new Person();
                $suspect->p_name=$request->input('suspectname');
                $suspect->save();
                $vinc=new PersonIncident();
                $vinc->i_id=$complaint->i_id;
                $vinc->p_id=$suspect->p_id;
                $vinc->save();
            }

        }
        return redirect('/officer');
    }
    public function updatecase(Request $request, $cid){
        // return $request;
        $complaint=Incident::where('i_id','=',$cid)->first();
        // return $complaint;
        $complaint->i_date=$request->input('DOI');
        $complaint->i_desc=$request->input('details');
        $complaint->status=$request->input('status');
        $complaint->a_id=intval($request->input('area'));
        $complaint->i_type=intval($request->input('type'));
        $complaint->lodged_by=Auth::user()->id;
        $complaint->save();
        if($request->input('vname')!=''){
            $victim=new Person();
            $victim->p_name=$request->input('vname');
            $victim->aadhar=$request->input('aadhar');
            $victim->address=$request->input('address');
            $victim->save();
        }
        if($request->input('suspectname')!=''){
            $suspect=new Person();
            $suspect->p_name=$request->input('suspectname');
            $suspect->save();
        }
        if($request->input('o_name')!=''){
            $assign=new OfficerIncident();
            $assign->o_id=$request->input('o_id');
            $assign->i_id=$cid;
            $assign->save();
        }
        return redirect('/officer');
    }
}
