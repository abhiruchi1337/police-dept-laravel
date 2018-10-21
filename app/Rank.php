<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $table='rank';
    protected $primaryKey='r_no';
    public $timestamps=false;
}
