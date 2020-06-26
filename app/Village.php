<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = [
      'name', 'chief'
    ];

    public function patient(){
        return $this->hasMany(Patient::class, 'village_id', 'id');
    }

}
