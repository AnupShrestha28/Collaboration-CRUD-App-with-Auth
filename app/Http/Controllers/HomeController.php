<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Home;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function deleteStudent($id){
        Home::where('id', '=', $id)->delete();

        return redirect('/dashboard')->with('success', 'Deleted Successfully');
    }
}
