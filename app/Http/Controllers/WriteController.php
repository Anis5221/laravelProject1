<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
class WriteController extends Controller
{
    public function writePost(){

        $category = DB::table('categorys')->get();

        return view('post.writepost', compact('category'));
    }


    public function deletePost($id){
        $pos = DB:: table('posts')->where('id',$id)->first();
        if(File::exists($pos->image)){
            File::delete($pos->image);
        }
        $del = DB::table('posts')->where('id',$id)->delete();
        if($del){
             return redirect()->back();
        }
    }

    public function viewPost($id){
        $cat = DB::table('posts')
         ->join('categorys', 'posts.category_id', 'categorys.id')
         ->select('posts.*','categorys.name')
         ->where('posts.id',$id)->first();
       return view('post.viewPost', compact('cat'));
    }


    public function updatePosts(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required | max: 255| min:4',
            'details' => 'required',
            'image' => 'image| mimes:JPG,jpeg,jpg,png,PNG'
        ]);

        $data = array();
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        $image = $request->file('image');

        if($image){
            $uniid = hexdec(uniqid());
            $imagetext = strtolower($image->getClientOriginalName());
            $imagefullname = $uniid.'.'.$imagetext;
            $imagepath = 'public/frontend/images/';
            $imageurl = $imagepath.$imagefullname;
            $image->move($imagepath, $imagefullname);

            $data['image'] = $imageurl;
            if(File::exists($request->old_photo)){
                unlink($request->old_photo);
            }
            
            $updatepos = DB::table('posts')->where('id',$id)->update($data);

            if($updatepos){
                $notification = array(
                    'message' => 'post Updated Successfully!!',
                    'alert-type' => 'success'
                );
                return Redirect()->route('all.post')->with($notification);
            }
        }else{
            
            $data['image'] = $request->old_photo;
            
            $updatepos = DB::table('posts')->where('id',$id)->update($data);
            if($updatepos){
                $notification = array(
                    'message' => 'post Updated Successfully!!',
                    'alert-type' => 'success'
                );
                return Redirect()->route('all.post')->with($notification);
            }
        }
        
    }



    public function allPost(){

        $post = DB::table('posts')
        ->join('categorys', 'posts.category_id', 'categorys.id')
        ->select('posts.*','categorys.name')->get();
        
        return view('post.allpost', compact('post'));
    }

    public function uploadPost(Request $request)
    {
       
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255|min:4',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,PNG|max:2024'
        ]);

        $data = array();
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        $img = $request->file('image');
    
        if($img){
            $uniqname = hexdec(uniqid());
            $textname = strtolower($img->getClientOriginalName());
            $imagefullname = $uniqname.'.'.$textname;
            $image_path = 'public/frontend/images/';
            $image_url = $image_path.$imagefullname;
            $success = $img->move($image_path, $imagefullname);
            $data['image'] = $image_url;
            $uploaddetail = DB::table('posts')->insert($data);
            
            if($uploaddetail){
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

    public function editPost($id){
        $cat = DB::table('categorys')->get();
        $post = DB:: table('posts')->where('id',$id)->first();
        return view('post.editPost', compact('cat','post'));
    }
}
