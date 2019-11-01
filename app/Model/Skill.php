<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $fillable = [
        'skill_title',
        'category_name', 
        'skill_description',
    ];

    protected $table = 'skills';
    
 
    public function skillEntry()
    {
        return $this->belongsTo('App\Model\SkillEntries');
    }
}
