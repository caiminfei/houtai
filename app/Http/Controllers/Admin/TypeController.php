<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    //获取分类信息的方法
    public static function getType(){
        $res=DB::table('type')
            ->select(DB::raw('*,concat(path,",",id) npath'))
            ->orderBy('npath','asc')
            ->get();
//        dd($res);
//        $res=DB::table('type')->get();
        //遍历判断path路径中逗号出现的次数，并添加相应路径信息
        foreach ($res as $k=>$v){
            //获取path路径中逗号出现的次数，并添加相应的信息
            $len=substr_count($res[$k]['path'],',');
            //根据逗号出现的次数，给分类名称添加相应的路径消息
            $res[$k]['name']=str_repeat('|----',$len).$v['name'];
        }
        return $res;

    }
    //加载分类列表
    public function getIndex()
    {
        $res=self::getType();
        //设置随即颜色的数组
        $color=array('info','warning','danger','success');

        //加载类别列表模板
        return view('Admin/Type/index',['res'=>$res,'color'=>$color]);
    }

    //加载添加分类的页面
    public function getAdd($id)
    {
        //查询所有信息
        $res=self::getType();

//        dd($res);
        //返回添加页面
        return view('Admin/Type/add',['res'=>$res,'id'=>$id]);
    }

    public function postInsert(Request $request)
    {
        $date=$request->except('_token');
        if ($date['pid']==0){
            $date['path']=0;
        }else{
            //获取父类的id和path信息
            $info=DB::table('type')->where('id','=',$date['pid'])->first();
            //在date中添加path信息
            $path=$info['path'].','.$date['pid'];
            $date['path']=$path;
//            dd($date);
        }
//        dd($date);
        //添加信息
        $res=DB::table('type')->insert($date);
        if ($res!=false){
            echo "<script>alert('添加成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }
    //删除板块
    public function getDelete($id){
        //判断该类下是否有子版块
        $res=DB::table('type')->where('pid','=',$id)->get();
//        dd($res);
        //判断
        if ($res){
            echo "<script>alert('该板块下有子版块，不允许删除');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            //执行删除
            $res1=DB::table('type')->where('id','=',$id)->delete();
            //判断
            if ($res1){
                echo "<script>alert('删除成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }else{
                echo "<script>alert('删除失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }
        }
    }
    //执行编辑
    public function getEdit($id){
        $res=DB::table('type')->where('id','=',$id)->get();
        $res1=self::getType();
//        dd($res);
        //返回添加页面
        return view('Admin/Type/edit',['res1'=>$res1,'pid'=>$res['0']['pid'],'res'=>$res]);
    }
    //执行更新
    public function postUpdate($id){
        var_dump($id);
        dd($_POST);
    }
}
