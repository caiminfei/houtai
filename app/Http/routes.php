<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//后台框架的路由组
Route::group([],function(){

	//后台框架主页面(若控制器在目录中，则需要指定目录，并且使用反斜线链接)
	Route::controller("Admin/Index","Admin\IndexController");

	//用户管理模块的路由
	Route::controller("Admin/User", "Admin\UserController");

	//分类管理模块的路由
	Route::controller("Admin/Type", "Admin\TypeController");

	//商品管理模块的路由
	Route::controller("Admin/Goods", "Admin\GoodsController");

});
//前台框架的路由组
Route::group([],function(){
    //前台框架主页面(
    Route::controller("Home/Index","Home\IndexController");
});