<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use File;
class StudentController extends Controller
{
    public function index()
    {
        $st = Student::all();
        return view('user.allstudent', compact('st'));
    }

    public function create()
    {
        return view('user.index');
    }

    public function store(Request $request)
    {
        $user = new Student;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $image = $request->file('image');
        if($image){
            $uniqname = hexdec(uniqid());
            $imagename = strtolower($image->getClientOriginalName());
            $imagefullname = $uniqname.'.'.$imagename;
            $imagepath = 'public/frontend/images/';
            $imageurl = $imagepath.$imagefullname;
            $image->move($imagepath, $imagefullname);
            $user->image = $imageurl;
        }
        $user->password =$request->password;
        
        if($user->save()){
            return redirect()->back();
        }else{
            echo "not success";
        }
    }

    public function show($id){

        $st = Student::find($id);
        return view('user.showStudent', compact('st'));
    }


    public function edit($id){

        $st = Student::find($id);
        return view('user.editStudent', compact('st'));
    }

    public function update($id, Request $request){

        $st = Student::find($id);
        $st->name = $request->name;
        $st->email = $request->email;
        $st->phone = $request->phone;
        $st->password = $request->password;
        $image = $request->file('image');
        if($image){
            $uniqname = hexdec(uniqid());
            $imagename = strtolower($image->getClientOriginalName());
            $imagefullname = $uniqname.'.'.$imagename;
            $imagepath = 'public/frontend/assete/';
            $imageurl = $imagepath.$imagefullname;
            $image->move($imagepath, $imagefullname);
            $st->image = $imageurl;
            if(File::exists($request->oldimage)){
                unlink($request->oldimage);
            }
           if($st->save()){
            return Redirect()->route('all.user');
           }
        }
        
    }

    public function destroy($id){

        $st = Student::findorfail($id);
        if(File::exists($st->image)){
            File::delete($st->image);
        }
        $st->delete();
        return redirect()->back();
    }
}
