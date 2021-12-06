<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(){
        return view('inquiry.index');
    }

    public function confirm(Request $request){
        $inputs = $request->name;
        $data = ['inputs' => $inputs];

        return view('inquiry.confirm', $data);
    }

    public function thanks(){
        return view('inquiry.thanks');
    }
}
