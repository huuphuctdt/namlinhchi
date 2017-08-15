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
                <h2>Config Menu</h2>
            </div>
            <div class="col-md-4 m-t-20">
                <a class="btn btn-success" href="menu/create">Create</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        @foreach($menus as $menu)
            <div class="row">
                <div class="form-group">
                <label class="control-label col-md-2" for="pwd">{{ "Menu ".$loop->iteration." : " }}</label>
                <div class="col-md-3 {{ $errors->has('menu_name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="menu_name_{{ $loop->iteration }}" name="menu_name[]" placeholder="Enter menu name..." value="{{ $menu->name }}">
                    @if ($errors->has('menu_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('menu_name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-3">
                    @if(count($menu->menu_child) > 0)
                        @foreach($menu->menu_child as $item)
                            <div class="col-md-12 form-group">
                                <input type="text" name="menu_child_name[]" class="form-control" value="{{ $item->name }}">
                            </div>
                        @endforeach
                    @endif
                </div>
                <form class="form-horizontal" action="{{ url('admin/menu/update') }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-2">
                        <input type="hidden" name="po_menu_id" value="{{ $menu->id }}">
                        <a class="btn btn-primary" href="{{ url('admin/menu/'.$menu->id) }}">Edit</a>
                        <button onclick="return confirm('Bạn có chắc chắn muốn xoá không? \nNếu xoá sẽ mất tất cả các menu con!');" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
                <div class="col-md-2">
                    <input type="text" class="form-control" disabled name="po_menu_id" value="{{ $menu->link }}">
                </div>
                </div>
            </div>
            <hr>
            <div class="clearfix"></div>
        @endforeach
    </div>
@endsection