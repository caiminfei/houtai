@extends('Layout.index')
@section('user','open')
@section('userAdd','active')
@section('container')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                用户添加 <small>添加用户时，请填写合法的信息。。</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Forms</li>
                <li><a class="link-effect" href="">Pre-Made</a></li>
            </ol>
        </div>
    </div>
</div>

<div class="content content-narrow">
<h2 class="content-heading">表单</h2>
<div class="col-lg-4">
        <!-- Bootstrap Register -->
        <div class="block block-themed">
            <div class="block-header bg-success">
                <ul class="block-options">
                    <li>
                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">Bootstrap</h3>
            </div>
            <div class="block-content">
                <form class="form-horizontal push-5-t" action="base_forms_premade.html" method="post" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-xs-12" for="register1-username">Username</label>
                        <div class="col-xs-12">
                            <input class="form-control" type="text" id="register1-username" name="register1-username" placeholder="Enter your username..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12" for="register1-email">Email</label>
                        <div class="col-xs-12">
                            <input class="form-control" type="email" id="register1-email" name="register1-email" placeholder="Enter your email..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12" for="register1-password">Password</label>
                        <div class="col-xs-12">
                            <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12" for="register1-password2">Confirm Password</label>
                        <div class="col-xs-12">
                            <input class="form-control" type="password" id="register1-password2" name="register1-password2" placeholder="Confirm your password..">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="css-input switch switch-sm switch-success">
                                <input type="checkbox" id="register1-terms" name="register1-terms"><span></span> Agree to terms?
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Bootstrap Register -->
    </div>

</div>
@endsection