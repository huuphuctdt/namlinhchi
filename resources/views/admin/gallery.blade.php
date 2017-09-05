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
                <h2>Chỉnh sửa hình ảnh + video công ty </h2>
            </div>
            <div class="col-md-4 m-t-20">
                <a class="btn btn-success" href="{{ url('admin/gallery/create') }}">Create</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        @foreach($gallerys as $gallery)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Hình ảnh + video công ty : </label>
                    <div class="col-md-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input disabled class="form-control" id="name" name="name" placeholder="Enter name..." value="{{ old('name', $gallery->name) }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-4">
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
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/gallery/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_gallery_id" value="{{ $gallery->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/gallery/'.$gallery->id) }}">Edit</a>
                            <button onclick="return confirm('Bạn có chắc chắn muốn xoá không?');" type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="text-right">
            {{ $gallerys->links() }}
        </div>
        <hr>
        <div class="clearfix"></div>
    </div>
@endsection