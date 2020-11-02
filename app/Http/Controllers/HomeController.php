<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function homepage(){

        $pos = DB::table('posts')
               ->join('categorys', 'posts.category_id','categorys.id')
               ->select('posts.*','categorys.name')->paginate(3);
        return view('pages.index', compact('pos'));
    } 



    public function eloquent(){
        return view('eloquent.show');
    }
}
