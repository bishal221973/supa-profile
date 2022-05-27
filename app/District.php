<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = [];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }
    public function municipalitie_areas()
    {
        return $this->hasMany(MunicipalityArea::class,'district_id','id');
    }
}
