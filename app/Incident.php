<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $table='incident';
    protected $primaryKey = 'i_id';
    public $timestamps=false;
}
