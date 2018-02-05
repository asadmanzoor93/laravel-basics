<?php
/**
 * Created by PhpStorm.
 * User: amanzoor
 * Date: 1/4/17
 * Time: 2:30 PM
 */

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
use App\Item;
use Illuminate\Support\Facades\Redirect;
use App\Teacher;
class ItemController extends Controller
{

    // Basic Index Page For Showing Items Information
    public function index()
    {
       $items = Item::all();
        //$items = Teacher::find(6)->Item()->where('title', 'Walk the dog')->get();

       // $items = Item::with('teacher')->get();

//        foreach ($items as $book) {
//            echo $book->teacher->name;
//            echo"<br>";
//        }
//        die('---------------');
        return View('Item.index', compact('items'));
    }

    // Create Page For Item
    public function create()
    {
        return View('Item.create');
    }

    // Save New Item
    public function store(Request $request)
    {
        $item = new Item;
        $item->title= $request->input('title');
        $item->description= $request->input('description');

        $item->save();

        return Redirect::to('item');
    }

    // Edit Page For Item Record
    public function edit($id)
    {
        $item = Item::find($id);
        return View('Item.edit', compact('item'));
    }

    //Update Item Record
    public function update(Request $request,$id)
    {
        Item::find($id)->update($request->all());
        return Redirect::to('item');
    }

    //Delete Item
    public function destroy($id)
    {
        Item::find($id)->delete();
        return Redirect::to('item');
    }

    public function show($id)
    {
        return Redirect::to('item');
    }


}