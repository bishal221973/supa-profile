<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeederHostel extends Model
{
    protected $fillable=[
        'district_id','municipality_id','school_name','quota','student_number'
    ];
}
