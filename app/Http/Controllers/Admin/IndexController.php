<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //加载后台主框架的方法
    public function getIndex()
    {
        //加载主框架模板
        return view('Admin/index');
    }
}
