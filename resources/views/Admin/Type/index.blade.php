@extends('Layout.index')
@section('goods','open')
@section('type','open')
@section('typeList','active')
@section('container')
<div class="block">
    <div class="block-header">
        <div class="block-options">
            <code>.js-table-sections</code>
        </div>
        <h3 class="block-title">Table Sections</h3>
    </div>
    <div class="block-content">
        <table class="table table-borderless">
            <thead>
            <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th>Name</th>
                <th class="hidden-xs" style="width: 15%;">Access</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($res as $k=>$v)
            @if($k%2==0)
            <tr>
            @else
            <tr class="{{$color[rand(0,3)]}}">
            @endif
                <td class="text-center">{{$v['id']}}</td>
                <td>{{$v['name']}}</td>
                <td class="hidden-xs">
                    <span class="label label-primary">{{$v['status']==1? '开启':'锁定'}}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href='{{url("Admin/Type/add")}}/{{$v["id"]}}'><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-plus"></i></button></a>
                        <a href="{{url("Admin/Type/edit")}}/{{$v["id"]}}"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button></a>
                        <a href='{{url("Admin/Type/delete")}}/{{$v["id"]}}'><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
