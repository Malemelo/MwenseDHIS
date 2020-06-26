<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'patient_name',
        'sex',
        'dob',
        'village_id',
        'phone_number',
        'landmark_location',
        'next_of_keen',
        'next_of_keen_relationship',
        'next_of_keen_phone',
        'nearest_health_facility_id'
    ];

    public function health_facility(){
        return $this->belongsTo(Health_Facility::class, 'nearest_health_facility_id', 'id');
    }

    public function village(){
        return $this->belongsTo(Village::class, 'village_id', 'id');
    }
}
