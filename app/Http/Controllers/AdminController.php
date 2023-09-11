<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class   AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view('admin.users',compact('data'));
    }

    public function foodMenu()
    {
        $data = food::all();
        return view('admin.food-menu',compact('data'));
    }

    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }

    public function deleteUser ($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function  deleteFood($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
}
