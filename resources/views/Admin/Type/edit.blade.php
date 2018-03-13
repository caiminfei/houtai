@extends('Layout.index')
@section('goods','open')
@section('type','open')
@section('typeAdd','active')
@section('container')
	<div class="block block-themed">
                                <div class="block-header bg-primary">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">编辑分类</h3>
                                </div>
                                <div class="block-content">
                                    <form class="form-horizontal push-5-t" action="{{url('Admin/Type/update')}}/{{$res['0']['id']}}" method="post" onsubmit="return true;">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="col-xs-8" for="login1-username">Username</label>
                                            <div class="col-xs-8">
                                                <input class="form-control" type="text" id="login1-username" name="name"  value="{{$res['0']['name']}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-xs-8" for="login1-password">选择父分类</label>
                                            <div class="col-xs-8">
                                                <select class="form-control" id="contact1-subject" name="pid" size="1">
                                                    <option value="0">请选择</option>
                                                    @foreach($res1 as $k=>$v)
                                                        <option value="{{$v['id']}}" {{$v['id']==$pid? 'selected':''}}>{{$v['name']}}</option>
                                                    {{--@if($v['id']==$id)--}}
                                                    {{--<option value="{{$v['id']}}" selected>{{$v['name']}}</option>--}}
                                                    {{--@else--}}
                                                    {{--<option value="{{$v['id']}}" >{{$v['name']}}</option>--}}
                                                    {{--@endif--}}
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-8">
                                                <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-arrow-right push-5-r"></i> 添加</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
@endsection