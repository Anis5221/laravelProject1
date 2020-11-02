<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use File;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $st = Student::all();
        return view('user.allstudent', compact('st'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $st = Student::find($id);
        return view('user.showStudent', compact('st'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $st = Student::find($id);
        return view('user.editStudent', compact('st'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
            return Redirect()->route('student.index');
           }
        }else{
            if($st->save()){
                return Redirect()->route('student.index');
               }
        }
    }

    public function destroy($id)
    {
        
        $st = Student::findorfail($id);
        if(File::exists($st->image)){
            File::delete($st->image);
        }
        $st->delete();
        return redirect()->back();
    }
    
}
