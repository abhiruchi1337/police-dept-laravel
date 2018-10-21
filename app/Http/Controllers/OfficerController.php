<?php

namespace App\Http\Controllers;
use App\Incident;
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
}
