<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SkillEntries extends Model
{
    //

    protected $table = 'skills_entry';

    protected $fillable = [
        'skill_id',
        'rating_id',
        'user_id',
        'evaluator_id', 
    ];
    /*public function skills()
    {
  
            return $this->hasMany('App\Model\Skill');
    }

    public function rating()
    {
        return $this->belongsTo('App\Model\Rating');
    }

    public function appraiser()
    {
        return $this->belongsTo('App\Model\Appraiser');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }*/
}
