<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aooo;
use DB;
class AoooController extends Controller
{
    public function index(){

        $user = Aooo::all();
    //    $user = DB::table('aooos')
    //    ->join('phones','aooos.id', 'phones.user_id')->get();
        return view('eloquent.hasone',compact('user'));
    }
}
