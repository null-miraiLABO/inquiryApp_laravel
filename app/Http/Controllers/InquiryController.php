<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InquirySendmail;

class InquiryController extends Controller
{
    public function index(){
        return view('inquiry.index');
    }

    public function confirm(Request $request){
        $data = $request->all();

        return view('inquiry.confirm', ['data' => $data]);
    }

    public function thanks(Request $request){
        $data = $request->all();

        //入力されたメールアドレスにメールを送信
        \Mail::to("********@gmail.com")->send(new InquirySendmail($data));

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();

        return view('inquiry.thanks', ['data' => $data]);
    }
}
