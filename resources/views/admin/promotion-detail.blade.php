@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Khuyến mãi</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Khuyến mãi
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chi tiết khuyến mãi</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/promotion') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/promotion/edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="control-label col-md-2" for="menu_name"></label>
                <label class="control-label col-md-4" for="menu_name">Name : </label>
                <label class="control-label col-md-4" for="menu_name">Note : </label>
                <label class="control-label col-md-2" for="menu_name">Read more : </label>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-2" for="image">Khuyến mãi : </label>
                    <div class="col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="name" name="name" placeholder="Enter name..."  rows="5">{{ old('name', $promotion->name) }}</textarea>
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-4 {{ $errors->has('note') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="note" name="note" placeholder="Enter note..." rows="5">{{ old('note', $promotion->note) }}</textarea>
                        @if ($errors->has('note'))
                            <span class="help-block">
                            <strong>{{ $errors->first('note') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('read_more') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" id="read_more" name="read_more" placeholder="Enter read more..." value="{{ old('read_more', $promotion->read_more) }}">
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
                    <input type="hidden" name="po_slider_id" value="{{ $promotion->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection