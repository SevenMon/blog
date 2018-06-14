<?php

namespace App\Http\Controllers\frontpc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //页面
    public function index(){
    	$title = 'SevenMon的微博-PHP博客-全栈博客';
    	$param = array(
    		'title' => $title
		);
        return view('Home/index',$param);
    }
}
