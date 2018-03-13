<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public static function getTypeBypid($pid){
        //查询pid为指定id的信息
        $res=DB::table('type')->where('pid','=',$pid)->get();

        //遍历查询到的结果
        $date=[];
        foreach ($res as $key=>$value){
            $value['tree']=self::getTypeBypid($value['id']);
            $date[]=$value;
        }

        return $date;
    }
    /**
     */
    public function getIndex()
    {
        $res=self::getTypeBypid(0);
//        dd($res);
        return view('Home/Index/index',['res'=>$res]);
    }

}
