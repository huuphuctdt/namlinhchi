@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Hình ảnh + video công ty</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Hình ảnh + video công ty
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chi tiết hình ảnh + video công ty</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/gallery') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/gallery/edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="control-label col-md-2" for="menu_name"></label>
                <label class="control-label col-md-2" for="menu_name">Name : </label>
                <label class="control-label col-md-2" for="menu_name">Image + Video : </label>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-2" for="image">Hình ảnh + video công ty : </label>
                    <div class="col-md-2 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input class="form-control" id="name" name="name" placeholder="Enter name..."  value="{{ old('name', $gallery->name) }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('image') ? ' has-error' : '' }}">
                        <?php
                        $path_info = pathinfo(url('upload/'.$gallery->image));
                        ?>
                        @if($path_info['extension'] == 'mp4')
                            <div class="">
                                <video width="282" height="219" controls muted>
                                    <source src="{{ url('upload/'.$gallery->image) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @else
                            <div class="">
                                <img src="{{ url('upload/'.$gallery->image) }}" title="Hình ảnh - DNTN Tiến Đạt" alt="Hình ảnh - DNTN Tiến Đạt" class="thumbnail" style="height: 219px; width: 282px;">
                            </div>
                        @endif
                        <input type="file" class="form-control" id="image" name="image">
                        @if ($errors->has('image'))
                            <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <input type="hidden" name="po_gallery_id" value="{{ $gallery->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection