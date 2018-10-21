<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $table='officer';
    protected $primaryKey='o_id';
    public $timestamps=false;
    protected $fillable = ['o_id','d_id','rank','salary'];
}
