<?php
/**
 * Created by PhpStorm.
 * User: amanzoor
 * Date: 1/6/17
 * Time: 6:35 PM
 */


namespace App\Modules\Employee\Models;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * Added just to demonstrate that models work
     * @return String
     */
    public function getAny()
    {
        return 'Dummy entry';
    }
}