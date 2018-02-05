<?php

namespace App\Http\Controllers;

use App\Category;
use App\ToDoList;
use Illuminate\Http\Request;

use App\Http\Requests;

class ToDoListController extends Controller
{
    // Basic Index Page For Showing ToDoList Items

    public function index()
    {
//        $list = ToDoList::find(2);
//        $category = Category::find(1);
//
//        if (!$list->categories->contains($category))
//        {
//            $list->categories()->save($category);
//        }

//        $category1 = new Category;
//        $category1->name='Vacation';
//        $category2 = new Category;
//        $category2->name='Tropical';
//        $category3 = new Category;
//        $category3->name='Leisure';
//
//        $categories = [$category1,$category2,$category3];
//        $list->categories()->saveMany($categories);

      //  $list->categories()->save($category);

        $todolist = ToDoList::all();


        return view('ToDoList.index',['todolists'=>$todolist]);
    }
}
