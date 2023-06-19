<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapenduduk2;

class Datapenduduk2Controller extends Controller
{
    public function index(){
        $databaru = datapenduduk2::all();
        return view ('datapenduduk', compact('databaru'));
    }
}
