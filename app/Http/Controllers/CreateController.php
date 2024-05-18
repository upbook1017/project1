<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createController extends Controller
{
    public function index()
    {
        $data =[
            'msg'=>'これはblade',
        ];
        return view('home.create', $data);
    }
}
