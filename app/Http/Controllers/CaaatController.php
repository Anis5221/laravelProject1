<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Poot;
class CaaatController extends Controller
{
    
    public function index()
    {
        $us = Poot::where('aooo_id',3)->get();

        // $us = DB::table('poots')
        //         ->join('aooos', 'poots.aooo_id', 'aooos.id')
        //         ->join('caaats', 'poots.caaat_id', 'caaats.id')
        //         ->where('aooo_id',1)
        //         ->get();
        return view('eloquent.hasMany', compact('us'));
    }

    public function gouser($id){
        $us = Poot::where('aooo_id',$id)->get();
        return view('eloquent.hasMany', compact('us'));
    }
}
