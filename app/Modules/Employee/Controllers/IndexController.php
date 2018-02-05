<?php
/**
 * Created by PhpStorm.
 * User: amanzoor
 * Date: 1/6/17
 * Time: 6:25 PM
 */

namespace App\Modules\Employee\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Employee\Models\Employee;

/**
 * IndexController
 *
 * Controller to house all the functionality directly
 * related to the Employee.
 */
class IndexController extends Controller
{
    function __construct( Employee $employee )
    {
        $this->employee = $employee;
    }
    public function index()
    {
        // Employee is the module name and dummy is the blade file
        // you can specify ModuleOne::someFolder.file if your file exists
        // inside a folder. Also the blade will use the same syntax i.e.
        // ModuleName::viewName
        return view('Employee::dummy');
    }
    public function modelTest()
    {
        // Added just to demonstrate that models work
        return $this->employee->getAny();
    }
}
