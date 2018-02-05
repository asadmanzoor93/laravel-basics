<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    protected $table = 'todolists';

    //Many to many relationship handler for category
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_todolist', 'todolist_id')->withTimestamps();
    }
}
