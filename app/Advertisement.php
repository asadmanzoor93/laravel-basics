<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function likes()
    {
        return $this->morphMany('App\Like', 'likeable');
    }
}
