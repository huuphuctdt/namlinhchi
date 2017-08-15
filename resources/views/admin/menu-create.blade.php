@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Header</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Menu
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Create Menu</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/menu') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/menu/create_menu') }}" method="post">
            {{ csrf_field() }}
        <div class="row">
            <div class="form-group">
                <label class="control-label col-md-2" for="menu_name">Menu : </label>
                <div class="col-md-5 {{ $errors->has('menu_name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Enter menu name..." value="{{ old('menu_name') }}">
                    @if ($errors->has('menu_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menu_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="menu_name_1" name="menu_child_name[]" placeholder="Enter menu child name..." value="{{ old('menu_child_name')[0] }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="menu_name_2" name="menu_child_name[]" placeholder="Enter menu child name..." value="{{ old('menu_child_name')[1] }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="menu_name_3" name="menu_child_name[]" placeholder="Enter menu child name..." value="{{ old('menu_child_name')[2] }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="menu_name_4" name="menu_child_name[]" placeholder="Enter menu child name..." value="{{ old('menu_child_name')[3] }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="menu_name_5" name="menu_child_name[]" placeholder="Enter menu child name..." value="{{ old('menu_child_name')[4] }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
        </form>
    </div>
@endsection