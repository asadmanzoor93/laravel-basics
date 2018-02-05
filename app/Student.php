<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //One To One relationship handler for profile
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
}
