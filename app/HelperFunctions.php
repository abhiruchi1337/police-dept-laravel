<?php

namespace App;
use App\IncidentType;
use App\Person;

use App\OfficerIncident;
use App\PersonIncident;
use App\Area;
use Illuminate\Http\Request;

class HelperFunctions
{
    public static function getTypeInt($dept){
        switch(strtolower($dept)){
            case 'user':
                return 1;
            case 'officer':
                return 2;
            case 'senior':
                return 3;
            // case 'CMPN':
            //     return 3;
            // case 'EXTC':
            //     return 4;
            // case 'INFT':
            //     return 5;
        }
    }
    public static function getIncident($id){
        return IncidentType::where('id',$id)->first()->name;
    }
    public static function getOfficer($oid){
        return Person::where('p_id',$oid)->first()->p_name;
    }
}
?>