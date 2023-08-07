<?php

namespace App\Http\Controllers;



class BackendController extends Controller
{
    public function  showIndex()
    {
        return view('backend.layout.index');
    }
}