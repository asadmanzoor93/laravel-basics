<?php
/**
 * Created by PhpStorm.
 * User: amanzoor
 * Date: 1/6/17
 * Time: 6:16 PM
 */

Route::group(['prefix' => 'employee', 'namespace' => 'App\Modules\Employee\Controllers'], function () {
    Route::get('/', ['as' => 'employee.index', 'uses' => 'IndexController@index']);
    Route::get('dummy', ['as' => 'employee.modelTest', 'uses' => 'IndexController@modelTest']);
});