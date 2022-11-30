<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Home;

class HomeController extends Controller
{
    public function dashboard(){
        $data = Home::all();
        return view('dashboard', compact('data'));
    }


    public function addStudent(){
        return view('add-student');
    }

    public function saveStudent(Request $request){
        // validating the form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        // dd($request->all());

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $home = new Home();
        $home->name = $name;
        $home->email = $email;
        $home->phone = $phone;
        $home->address = $address;

        $home->save();

        return redirect('/dashboard')->with('success', 'New Student added successfully');

    }

    public function editStudent($id){
        $data = Home::where('id', '=', $id)->first();

        return view('edit-student', compact('data'));
    }

    public function updateStudent(Request $request){
        // validating the form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        // dd($request->all());

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        Home::where('id', '=', $id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        ]);

        return redirect('/dashboard')->with('success', 'Updated Successfully');
    }
}
