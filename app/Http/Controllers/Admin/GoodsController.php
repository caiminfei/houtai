<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    /**
     *加载添加商品的页面
     */
    public function getAdd()
    {
        //获取分类信息
        $res = TypeController::getType();

        return view('Admin/Goods/add',['res'=>$res]);
    }
    //执行商品添加的方法
    public function postInsert(Request $request){
        //首先进行表单验证
        $this->validate($request,[
           'goods'=>'required',
           'company'=>'required',
        ],[
            'goods.required'=>'商品名称不能为空',
            'company.required'=>'生产厂家名称不能为空',
        ]);
        dd($request->all());
    }
}
