<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Home;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }


    public function addStudent(){
        return view('add-student');
    }

    public function editStudent(){
        return view('edit-student');
    }
}
