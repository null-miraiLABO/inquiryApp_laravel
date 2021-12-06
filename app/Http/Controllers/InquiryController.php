<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(){
        return view('inquiry.index');
    }

    public function confirm(Request $request){
        $data = $request->all();

        return view('inquiry.confirm', ['data' => $data]);
    }

    public function thanks(){
        return view('inquiry.thanks');
    }
}
