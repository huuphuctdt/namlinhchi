@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Sản phẩm</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Sản phẩm
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo sản phẩm</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/product') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/product/create_product') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="control-label col-md-2" for="menu_name"></label>
                <label class="control-label col-md-2" for="menu_name">Image : </label>
                <label class="control-label col-md-2" for="menu_name">Name : </label>
                <label class="control-label col-md-2" for="menu_name">Description : </label>
                <label class="control-label col-md-1" for="menu_name">Old Price : </label>
                <label class="control-label col-md-1" for="menu_name">New Price : </label>
                <label class="control-label col-md-2" for="menu_name">Read more : </label>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-2" for="image">Sản phẩm : </label>
                    <div class="col-md-2 {{ $errors->has('image') ? ' has-error' : '' }}">
                        <input type="file" class="form-control" id="image" name="image">
                        @if ($errors->has('image'))
                            <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="name" name="name" placeholder="Enter name..."  rows="5">{{ old('name') }}</textarea>
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('description') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="description" name="description" placeholder="Enter description..." rows="5">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-1 {{ $errors->has('old_price') ? ' has-error' : '' }}">
                        <input type="number" class="form-control" id="old_price" name="old_price" placeholder="Enter price..." value="{{ old('old_price') }}">
                        @if ($errors->has('old_price'))
                            <span class="help-block">
                            <strong>{{ $errors->first('old_price') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-1 {{ $errors->has('new_price') ? ' has-error' : '' }}">
                        <input type="number" class="form-control" id="new_price" name="new_price" placeholder="Enter price..." value="{{ old('new_price') }}">
                        @if ($errors->has('new_price'))
                            <span class="help-block">
                            <strong>{{ $errors->first('new_price') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('read_more') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" id="read_more" name="read_more" placeholder="Enter read more..." value="{{ old('read_more') }}">
                        @if ($errors->has('read_more'))
                            <span class="help-block">
                            <strong>{{ $errors->first('read_more') }}</strong>
                        </span>
                        @endif
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