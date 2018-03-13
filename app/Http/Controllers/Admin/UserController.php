<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //加载用户列表的方法
    public function getIndex()
    {
        //查询信息
        $info = DB::table('users')->get();

        //压入权限信息
        $auth = array('超级管理员','启用','禁用');

        //解析模板
        return view('Admin/User/index',['info'=>$info,'auth'=>$auth]);
    }

    //加载添加用户表单的方法
    public function getAdd()
    {
        //加载添加表单
        return view('Admin/User/add');
    }

    //加载回收站列表的方法
    public function getRecyle()
    {
        //加载回收站列表
        return view('Admin/User/recyle');
    }
}
