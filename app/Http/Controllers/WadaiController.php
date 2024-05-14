<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WadaiController extends Controller
{
    public function index()
    {
        $data =[
            'msg'=>'これはblade',
        ];
        return view('home.wadai', $data);
    }
}
