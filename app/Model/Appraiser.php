<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appraiser extends Model
{
    //
    
    protected $table = 'evaluator';

    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department()
    {
        return $this->hasOne('App\Model\Department');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function skillentry()
    {
        return $this->hasMany('App\Model\SkillEntries');
    }
}
