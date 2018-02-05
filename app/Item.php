<?php
/**
 * Created by PhpStorm.
 * User: amanzoor
 * Date: 1/4/17
 * Time: 1:35 PM
 */


namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public $fillable = ['title','description'];

    //One to many relationship handler for teacher
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

}