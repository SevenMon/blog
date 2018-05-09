<?php

namespace App\Http\Controllers\frontpc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabelController extends Controller
{
    //页面
    public function index(){
        return view('Label/index');
    }
}
