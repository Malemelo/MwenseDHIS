<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health_Facility extends Model
{
    protected $fillable = [
      'name'
    ];

    public function patients(){
        $this->hasMany(Patient::class, 'nearest_health_facility_id', 'id');
    }
}
