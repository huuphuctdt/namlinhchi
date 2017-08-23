@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Footer</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Footer
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chỉnh sửa footer</h2>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <div class="row form-group">
            <div class="form-group">
                <label class="control-label col-md-2" for="pwd">Footer : </label>
                <div class="col-md-3">
                    <div class="col-md-12 form-group">
                        <input disabled name="address" id="address" class="form-control" placeholder="Enter address..." value="{{ old('address', $footer->address) }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12 form-group">
                        <input disabled name="address" id="address" class="form-control" placeholder="Enter address..." value="{{ old('address', $footer->address) }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary" href="{{ url('admin/footer/'.$footer->id) }}">Edit</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="clearfix"></div>
    </div>
@endsection