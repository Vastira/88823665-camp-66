<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MulTableController extends Controller
{
    //
    function input_mul(Request $req, $number=""){
        $number = $req->input('number');
        return view('mul-table', ['number' => $number]);
    }
}
