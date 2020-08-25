<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function addCategory(){
        return view('post.add_category');
    }

    public function allCategory(){
        
        $category = DB::table('categorys')->get();

        return view('post.all_category', compact('category'));
    }

    public function viewCategory($id){

        $viewcat = DB::table('categorys')->where('id',$id)->first();

        return view('post.Category')->with('cat',$viewcat);
    }

    public function deleteCategory($id){

        $deletecat = DB::table('categorys')->where('id',$id)->delete();

                // check data deleted or not
                if ($deletecat == 1) {
                    $success = true;
                    $message = "User deleted successfully";
                } else {
                    $success = true;
                    $message = "User not found";
                }
        return Redirect()->back()->with($success,$message);
    }


    public function editCategory($id){

        $editcat = DB::table('categorys')->where('id',$id)->first();
        return view('post.editcategory', compact('editcat'));
    }

    public function updateCategory(Request $request, $id){

        $validatedata = $request->validate([
            'name' => 'required|max:100|min:4',
            'slag' => 'required'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['slag'] = $request->slag;

        $updatecat = DB::table('categorys')->where('id', $id)->update($data);
            if($updatecat){
                $notification = array(
                    'message' => 'Category created successfully!',
                    'alert-type' => 'success'
                );
                
                return Redirect()->route('all.category')->with($notification);
            }else{
                $notification = array(
                    'message' => 'Post not created successfully!',
                    'alert-type' => 'error'
                );
                
                return Redirect()->route('all.category')->with($notification);
            }
        
    }



}
