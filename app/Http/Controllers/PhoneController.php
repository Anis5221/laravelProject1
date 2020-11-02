<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Phone;
class PhoneController extends Controller
{
    public function index()
    {
        $ph = Phone::all();

        return view('eloquent.belongto', compact('ph'));
    }

}
