<?php

namespace App\Http\Controllers;

use App\Item;
use App\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;
use Debugbar;

class TeacherController extends Controller
{
    // Basic Index Page For Showing Teachers Information

    public function index()
    {
//        $list = Teacher::find(6);
//
//        $item = new Item;
//        $item->title = 'Walk the dog';
//        $item->description ='Walk the dog description';
//        $list->Item()->save($item);
//
//        $item = new Item;
//        $item->title = 'Make tacos for dinner';
//        $item->description ='Make tacos for dinner description';
//        $list->Item()->save($item);

        $teachers = Teacher::all();
//        $teachers = Teacher::where('id', 1)
//            ->orderBy('name', 'desc')
//            ->get();

//        $teachers =array();
//        foreach (Teacher::whereNotIn('id', [1,113,22])->cursor() as $teacher) {
//            $teachers[]=$teacher;
//        }


        Debugbar::info($teachers);
        Debugbar::error('Error!');
        Debugbar::warning('Watch out…');
        Debugbar::addMessage('Another message', 'mylabel');
        return view('Teacher.index',['teachers'=>$teachers]);
    }

    // Different CRUD operation related functions

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {

    }
}
