<?php

namespace App;

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
}
?>