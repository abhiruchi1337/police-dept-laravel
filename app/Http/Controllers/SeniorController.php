<?php

namespace App\Http\Controllers;
use App\Incident;
use App\Person;
use App\Officer;
use App\User;
use Auth;
use App\IncidentType;
use App\OfficerIncident;
use Illuminate\Support\Facades\Hash;
use App\PersonIncident;
use App\Area;
use Illuminate\Http\Request;
class SeniorController extends Controller
{
    public function index(){
        return view('senior.sr_police_main')->with('pending',Incident::where('status','=','ongoing')->take(5)->get());
    }
    public function viewCases(Request $request){
        $complaints=Incident::paginate(10);
        return view('senior.jr_police_all_cases')->with('cmp',$complaints);
    }
    public function showCase($cid){
        $complaint=Incident::where('i_id','=',$cid)->first();
        return view('senior.inctype')->with('complaint',$complaint);
    }
    public function newCase(){
        
            $ctype=IncidentType::all();
            $areas=Area::all();
            return view('senior.lodgecomplaint')->with('ctype',$ctype)->with('areas',$areas);
        
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
        echo 'complaint saved';
        // return $complaint->id;
        if($request->input('vname')!=''||($request->input('suspectname')!='')){
            if($request->input('vname')!=''){
                $victim=new Person();
                $v=Person::where('aadhar',$request->input('aadhar'))->first();
                if (!isset($v)){
                    $victim->p_name=$request->input('vname');
                $victim->aadhar=$request->input('aadhar');
                $victim->address=$request->input('address');
                $victim->p_type=6;
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
                $suspect->p_type=5;
                $suspect->save();
                $vinc=new PersonIncident();
                $vinc->i_id=$complaint->i_id;
                $vinc->p_id=$suspect->p_id;
                $vinc->save();
            }

        }
        // return 'fuckall';
        return redirect('/senior');
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
            $victim->p_type=6;
            $victim->save();
        }
        if($request->input('suspectname')!=''){
            $suspect=new Person();
            $suspect->p_name=$request->input('suspectname');
            $victim->p_type=5;
            $suspect->save();
        }
        if($request->input('officer')!=''){
            $assign=new OfficerIncident();
            $assign->o_id=$request->input('officer');
            $assign->i_id=$cid;
            $assign->save();
        }
        return redirect('/senior');
    }
    public function viewOfficers(){
        return view('senior.view_officers')->with('officers',Officer::all());
    }
    public function showOfficer($oid){
        return view('senior.officerdetail')->with('officer',Officer::where('o_id','=',$oid)->first());
    }
    public function newOfficer(){
        return view('senior.createofficer');
    }
    public function registerOfficer(Request $request){
        // return $request;
        // $o=new Officer();
        $data=$request->except('_token','department','rank','salary','address');
        $data['type']=2;
        $u=User::create([ 'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'type' =>$data['type']]);
        // $o->fill(['d_id'=>$request->input('department'), 'rank' => $request->input('rank'),'salary'=> $request->input('salary'),'o_id' => $u->id]);
        // $o->save();
        // Person::create($request->except('_token','','address'));
        return redirect()->back();
    }
    
}
