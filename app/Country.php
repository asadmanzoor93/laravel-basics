<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts()
    {
        return $this->hasManyThrough('App\Post', 'App\Citizen','country_id', 'citizen_id', 'id');
    }
}
