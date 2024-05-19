<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class createController extends Controller
{
    public function create(Request $request)
    {
        return view('home.create');
    }
    public function create1(Request $request)
    {
        $param = [
            'topic' => $request->topic,
            'comment' => $request->comment,
        ];
    DB::table('topics_data')->insert($param);
    return redirect('/topic');
    }
}
