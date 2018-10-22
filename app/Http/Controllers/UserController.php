<?php

namespace App\Http\Controllers;
use App\IncidentType;
use App\Incident;
use App\Area;
use Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function newcomplaint(Request $request){
        $noncog=IncidentType::where('type','=',2)->get();
        $areas=Area::all();
        return view('lodgecomplaint')->with('ctype',$noncog)->with('areas',$areas);
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

    public function livesearch(){
        $xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
    }
}
