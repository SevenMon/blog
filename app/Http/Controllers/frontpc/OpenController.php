<?php

namespace App\Http\Controllers\frontpc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpenController extends Controller
{
    //页面
    public function index(){
        return view('Open/index');
    }
}
