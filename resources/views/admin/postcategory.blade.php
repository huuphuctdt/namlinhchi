@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Danh mục bài viết</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Danh mục bài viết
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chỉnh sửa danh mục bài viết</h2>
            </div>
            <div class="col-md-4 m-t-20">
                <a class="btn btn-success" href="{{ url('admin/post_category/create') }}">Create</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        @foreach($postcategorys as $postcategory)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Danh mục {{ $loop->iteration }} : </label>
                    <div class="col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" name="name" id="name" class="form-control" value="{{ $postcategory->name }}" disabled>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/post_category/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_post_category_id" value="{{ $postcategory->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/post_category/'.$postcategory->id) }}">Edit</a>
                            @if($postcategory->id != 1)
                            <button onclick="return confirm('Bạn có chắc chắn muốn xoá không?\nNếu xóa danh mục này. \nCác bài viết thuộc danh mục sẽ chuyển sang danh mục Tất cả.');" type="submit" class="btn btn-danger">Delete</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <hr>
        <div class="clearfix"></div>
    </div>
@endsection