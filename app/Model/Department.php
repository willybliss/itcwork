<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
      
        'department_name', 
    ];
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
