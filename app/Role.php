<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function users(){
        $this->hasMany(User::class, 'role_id', 'id');
    }
}
