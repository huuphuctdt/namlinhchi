@extends('admin.index')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Header</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Logo
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="col-lg-12">
        <h2>Config Header</h2>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-horizontal" action="{{ url('admin/header/update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-md-2" for="logo">Image :</label>
                <div class="col-md-10 {{ $errors->has('logo') ? ' has-error' : '' }}">
                    <img src="{{ url('upload/'.$header->logo) }}" alt="logo" title="logo" name="file">
                    <input type="file" name="logo">
                    @if ($errors->has('logo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Tag Line :</label>
                <div class="col-sm-10 {{ $errors->has('tagline') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Enter tag line..." value="{{ $header->tagline }}">
                    @if ($errors->has('tagline'))
                        <span class="help-block">
                        <strong>{{ $errors->first('tagline') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="po_header_id" value="{{ $header->id }}">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection