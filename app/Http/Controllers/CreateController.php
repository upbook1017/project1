<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createController extends Controller
{
    public function create1(Request $request)
    {
        return view('home.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Create::$rules);
        $create = new Create;
        $form = $request->all();
        unset($form['_token']);
        $create->fill($form)->save();
        return redirect('/create');
    }
}
