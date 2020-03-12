<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class manageController extends Controller
{
    //
    public function login(){
        return view('login');
    }



    public function  admin(){
        $student = Student::all();
        return view('admin', compact('student'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $DOB = $request->input('DOB');
        $favorite = $request->input('favorite');

        Student::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'address'=>$address,
            'phone'=>$phone,
            'DOB'=>$DOB,
            'favorite'=>$favorite


        ]);
        return redirect()->route('admin');

    }
    public function edit($id){
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function update($id, Request $request){
        $student = Student::find($id);
        $student->update([
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
            'address' =>$request->input('address'),
            'phone' =>$request->input('phone'),
            'DOB' =>$request->input('DOB'),
            'favorite' =>$request->input('favorite'),
        ]);
        return redirect()->route('admin');
    }

    public function destroy($id){
        $student = Student::find($id);
        $student ->delete();

        return redirect()->route('admin');

    }
}
