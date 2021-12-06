<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(){
        return view('inquiry.index');
    }
    public function confirm(){
        return view('inquiry.confirm');
    }
    public function thanks(){
        return view('inquiry.thanks');
    }
}
