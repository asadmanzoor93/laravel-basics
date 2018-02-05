<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //One to many relationship handler for Item
    public function Item()
    {
        return $this->hasMany('App\Item');
    }
}
