@extends('Layout.index')
@section('user','open')
@section('userList','active')
@section('container')
<div class="block">
    <div class="block-header">
        <h3 class="block-title">用户列表 <small>你可以在这里执行用户相关操作</small></h3>
    </div>
    <div class="block-content">
        <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped js-dataTable-simple dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
                <tr role="row">
                	<th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 5%;" aria-sort="ascending" aria-label=": activate to sort column descending">id</th>
                	<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 5%;" aria-label="Name: activate to sort column ascending">Name</th>
                	<th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 5%;" aria-label="Email: activate to sort column ascending">Sex</th>
                	<th class="hidden-xs sorting" style="width: 20%;text-align:center;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Address</th>
                	<th class="text-center sorting_disabled" style="width: 7%;" rowspan="1" colspan="1" aria-label="Actions">Code</th>
                	<th class="text-center sorting_disabled" style="width: 10%;" rowspan="1" colspan="1" aria-label="Actions">Phone</th>
                	<th class="text-center sorting_disabled" style="width: 12%;" rowspan="1" colspan="1" aria-label="Actions">Email</th>
                	<th class="text-center sorting_disabled" style="width: 5%;" rowspan="1" colspan="1" aria-label="Actions">Addtime</th>
                	<th class="text-center sorting_disabled" style="width: 7%;" rowspan="1" colspan="1" aria-label="Actions">State</th>
                	<th class="text-center sorting_disabled" style="width: 7%;" rowspan="1" colspan="1" aria-label="Actions">Control</th>
                </tr>
            </thead>
            <tbody>
            @foreach($info as $v)
                 <tr role="row" class="odd">
                    <td class="text-center sorting_1">{{$v->id}}</td>
                    <td class="font-w600">{{$v->name}}</td>
                    <td class="hidden-xs">{{$v->sex==w ? '女' : '男'}}</td>
                    <td class="hidden-xs">{{$v->address}}</td>
                    <td class="hidden-xs">{{$v->hunfou}}</td>
                    <td class="hidden-xs">{{$v->phone}}</td>
                    <td class="hidden-xs">{{$v->email}}</td>
                    <td class="hidden-xs">{{date('Y-m-d',$v->addtime)}}</td>
                    <td class="hidden-xs">
                    @if ($v->state!=2)
                        <span class="label label-success">{{$auth[$v->state]}}</span>
                    @else
                        <span class="label label-danger">{{$auth[$v->state]}}</span>
					@endif
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="修改信息"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="回收站"><i class="fa fa-recycle"></i></button>
                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="修改权限"><i class="si si-lock"></i></button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing <strong>1</strong>-<strong>10</strong> of <strong>40</strong></div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="DataTables_Table_0" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">4</a></li><li class="paginate_button next" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
    </div>
</div>
@endsection