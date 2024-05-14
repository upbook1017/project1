<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SakuseiController extends Controller
{
    public function index()
    {
        $data =[
            'msg'=>'これはblade',
        ];
        return view('home.sakusei', $data);
    }
}
