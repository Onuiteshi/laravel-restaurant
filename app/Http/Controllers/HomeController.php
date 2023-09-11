<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display the home view.
     *
     * @return View
     */
    public function index()
    {
        $data = food::all();
        return view('home',compact('data'));
    }

    public function redirect()
    {
        $data = food::all();
        $userType = Auth::user()->userType;
        if ($userType == '1') {
            return view('admin.admin-home');
        }else{
            return view('home',compact('data'));
        }
    }
}
