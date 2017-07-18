<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstPageController extends Controller
{
    //
    public function index()
    {
        return view('myFirstPage.index');
    }
}
