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
                <h2>Detail Menu</h2>
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
        <form class="form-group" action="{{ url('admin/menu/edit') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-1" for="menu_name">Menu : </label>
                    <div class="col-md-3 {{ $errors->has('menu_name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Enter menu name..." value="@if(old('menu_name') != ''){{ old('menu_name') }}@else{{ $menu->name }}@endif">
                        @if ($errors->has('menu_name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('menu_name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            @foreach($menu->menu_child as $item)
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="menu_child_name[]" placeholder="Enter menu child name..." value="{{ $item->name }}">
                                </div>
                                <div class="clearfix"></div>
                            @endforeach
                            <?php $count = count($menu->menu_child); ?>
                            @for($i = $count; $i < 5; $i++)
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="menu_child_name[]" placeholder="Enter menu child name...">
                                </div>
                                <div class="clearfix"></div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            @foreach($menu->menu_child as $item)
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="menu_child_link[]" placeholder="Enter menu child name..." value="{{ $item->link }}">
                                </div>
                                <div class="clearfix"></div>
                            @endforeach
                            <?php $count = count($menu->menu_child); ?>
                            @for($i = $count; $i < 5; $i++)
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="menu_child_link[]" placeholder="Enter menu child name...">
                                </div>
                                <div class="clearfix"></div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <input type="hidden" name="po_menu_id" value="{{ $menu->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection