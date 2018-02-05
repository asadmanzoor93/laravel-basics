<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Use App\User;

Route::get('/', function () {
    return view('welcome', ['name' => 'Asad']);
});

Route::get('/post/about', function () {
    return view('about',['name' => 'Asad']);
});

Route::get('/blade', function () {
    return view('child', ['name' => 'Asad']);
});

Route::get('greeting', function () {
    return view('welcome', ['name' => 'Asad']);
});

Route::resource('item','ItemController');

Route::resource('teacher','TeacherController');

Route::resource('student','StudentController');

Route::resource('todolist','ToDoListController');

Route::resource('advertisement','AdvertisementController');


//middleware testing route
Route::get('age/{id}', ['middleware' => 'age', function ($id) {
    return "You can see this after success of middleware check.";
}]);