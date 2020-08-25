<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Postcontroller extends Controller
{
    public function storeCategory(Request $requst){

        $validatedData = $requst->validate([
            'name' => 'required|unique:categorys|max:17|min:4',
            'slag' => 'required',
        ]);

        $data = array();
        $data['name'] = $requst->name;
        $data['slag'] = $requst->slag;
        $category = DB::table('categorys')->insert($data);
       
        if($category){
            $notification = array(
                'message' => 'Post created successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Post not created successfully!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
