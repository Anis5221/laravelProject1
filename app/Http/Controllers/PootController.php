<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poot;
use DB;
class PootController extends Controller
{
    public function index()
    {
        $pot = Poot::all();

        // $pot = DB::table('poots')
        // ->join('caaats','poots.category_id', 'caaats.id')
        // ->join('aooos', 'poots.user_id', 'aooos.id')
        // ->select('poots.*', 'caaats.category','aooos.name')
        // ->get();
        return view('eloquent.belongstomany', compact('pot'));
    }
}
