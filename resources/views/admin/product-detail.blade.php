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
                <h2>Chi tiết sản phẩm</h2>
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
        <form class="form-group" action="{{ url('admin/product/edit') }}" method="post" enctype="multipart/form-data">
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
                        <button style="margin-top: 20px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Check Old Photo</button>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Hình ảnh sản phẩm</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('/upload/'.$product->image) }}" class="img-thumbnail">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="name" name="name" placeholder="Enter name..."  rows="5">@if(old('name') != ''){{ old('name') }}@else{{ $product->name }}@endif</textarea>
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('description') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="description" name="description" placeholder="Enter description..." rows="5">@if(old('description') != ''){{ old('description') }}@else{{ $product->description }}@endif</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-1 {{ $errors->has('old_price') ? ' has-error' : '' }}">
                        <input type="number" class="form-control" id="old_price" name="old_price" placeholder="Enter old_price..." value="@if(old('old_price') != ''){{ old('old_price') }}@else{{ $product->old_price }}@endif">
                        @if ($errors->has('old_price'))
                            <span class="help-block">
                            <strong>{{ $errors->first('old_price') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-1 {{ $errors->has('new_price') ? ' has-error' : '' }}">
                        <input type="number" class="form-control" id="new_price" name="new_price" placeholder="Enter new_price..." value="@if(old('new_price') != ''){{ old('new_price') }}@else{{ $product->new_price }}@endif">
                        @if ($errors->has('new_price'))
                            <span class="help-block">
                            <strong>{{ $errors->first('new_price') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('read_more') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" id="read_more" name="read_more" placeholder="Enter read more..." value="@if(old('read_more') != ''){{ old('read_more') }}@else{{ $product->read_more }}@endif">
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
                    <input type="hidden" name="po_product_id" value="{{ $product->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection