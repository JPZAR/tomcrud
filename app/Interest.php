<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public function members()
    {
        return $this->belongsToMany('App\Member', 'interests_members');
    }
}
