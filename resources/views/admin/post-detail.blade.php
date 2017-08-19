@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Bài viết</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Bài viết
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chi tiết bài viết</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/post') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/post/edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="control-label col-md-2" for="menu_name"></label>
                <label class="control-label col-md-2" for="menu_name">Image : </label>
                <label class="control-label col-md-2" for="menu_name">Category : </label>
                <label class="control-label col-md-3" for="menu_name">Name : </label>
                <label class="control-label col-md-3" for="menu_name">Content : </label>
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
                        <button style="margin-top: 20px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Check Old Photo</button>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Hình ảnh bài viết</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('/upload/'.$post->image) }}" class="img-thumbnail">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 {{ $errors->has('post_category') ? ' has-error' : '' }}">
                        <select name="post_category" class="form-control">
                            <option value="">--- Select ---</option>
                            @foreach($post_categorys as $post_category)
                                <option @if(old('post_category') != null && (old('post_category') == $post_category->id)) {{ 'selected' }} @endif @if(($post->category_id == $post_category->id) && (old('post_category') == null)) {{ 'selected' }} @endif value="{{ $post_category->id }}">{{ $post_category->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('post_category'))
                            <span class="help-block">
                            <strong>{{ $errors->first('post_category') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="name" name="name" placeholder="Enter name..."  rows="5">@if(old('name') != ''){{ old('name') }}@else{{ $post->name }}@endif</textarea>
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-3 {{ $errors->has('content') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="content" name="content" placeholder="Enter content..." rows="10">@if(old('content') != ''){{ old('content') }}@else{{ $post->content }}@endif</textarea>
                        @if ($errors->has('content'))
                            <span class="help-block">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                        @endif
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <input type="hidden" name="po_post_id" value="{{ $post->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection