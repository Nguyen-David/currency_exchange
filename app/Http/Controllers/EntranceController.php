<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntranceController extends Controller
{

    public function show() {
        return view('main\sign_in');
    }

//    public function entry(Request $request){
//        dd($request->all());
//        $validatedData = $request->validate([
//            'title' => 'required|unique:posts|max:255',
//            'body' => 'required',
//        ]);
//
//        Session::flash('name', 'Welcome Back!');
//    }
}
