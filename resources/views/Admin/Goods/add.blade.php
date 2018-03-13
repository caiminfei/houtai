@extends('Layout/index')
@section('goodList','open')
@section('addGoods','active')
@section('container')
<div class="block">
    <div class="block-header">
        <ul class="block-options">
            <li>
                <button type="button"><i class="si si-settings"></i></button>
            </li>
        </ul>
        <h3 class="block-title">商品添加</h3>
    </div>
    <div class="block-content block-content-narrow">
        <form class="form-horizontal" action="{{url('Admin/Goods/insert')}}" method="post" enctype="multipart/form-data" onsubmit="return true;">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-xs-12" for="example-select">选择类别</label>
                <div class="col-sm-9">
                    <select class="form-control" id="example-select" name="typeid" size="1">
                        <option value="0">请选择</option>
                    @foreach($res as $k=>$v)
                        <option value="{{$v['id']}}">{{$v['name']}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12" for="example-text-input">商品名称</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="example-text-input" name="goods" placeholder="请输入商品名称..">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12" for="example-email-input">生产厂家</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="example-email-input" name="company" placeholder="请输入生产厂家..">
                </div>
            </div>
            <h2 class="content-heading">商品简介</h2>
            <div class="block">
                <div class="block-content" style="border:1px solid #ccc;">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <!-- CKEditor Container -->
                            <textarea id="js-ckeditor" name="descr" contenteditable="true" class="cheditor" placeholder="请输入商品简介" ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12" for="example-file-input">请选择商品主图</label>
                <div class="col-xs-12">
                    <input type="file" id="example-file-input" name="picname">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12" for="example-password-input">单价</label>
                <div class="col-sm-9">
                    <input class="form-control" type="number" id="example-password-input" name="price" placeholder="请输入您商品的单价..">
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12" for="example-select">状态</label>
                <div class="col-sm-9">
                    <select class="form-control" id="example-select" name="state" size="1">
                        <option value="0">请选择</option>
                        <option value="1">新上架</option>
                        <option value="2">已下架</option>
                    </select>
                </div>
            </div>
            <div class="form-group has-active">
                <label class="col-xs-12" for="example-text-input-success">库存量</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="example-text-input-success" name="store" placeholder="请输入库存量..">
                </div>
            </div>
            <button class="btn btn-success push-5-r push-10" type="submit"><i class="fa fa-plus"></i> 添加商品</button>
        </form>
    </div>
</div>
@endsection

