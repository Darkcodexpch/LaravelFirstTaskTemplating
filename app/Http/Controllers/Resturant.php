<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Resturant extends Controller
{
public function index(){
    return view('index');
}

public function Blog(){
    return view('Blog');
}

public function Mem(){
    return view('Membership');
}

public function Res(){
    return view('Reservation');
}
}
