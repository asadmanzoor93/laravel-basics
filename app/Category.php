<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Many to many relationship handler for todolist
    public function todolists()
    {
        return $this->belongsToMany('App\ToDoList', 'category_todolist', 'category_id')->withTimestamps();
    }
}
