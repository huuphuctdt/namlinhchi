@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Header</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Slider
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Detail Slider</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/slider') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/slider/edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="control-label col-md-2" for="menu_name"></label>
                <label class="control-label col-md-2" for="menu_name">Image : </label>
                <label class="control-label col-md-2" for="menu_name">Caption : </label>
                <label class="control-label col-md-2" for="menu_name">Note : </label>
                <label class="control-label col-md-2" for="menu_name">Read more : </label>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-2" for="image">Slider : </label>
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
                                        <h4 class="modal-title">Slider Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('/upload/'.$slider->image) }}" class="img-thumbnail">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 {{ $errors->has('caption') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="caption" name="caption" placeholder="Enter caption..."  rows="5">{{ old('caption', $slider->caption) }}</textarea>
                        @if ($errors->has('caption'))
                            <span class="help-block">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('note') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="note" name="note" placeholder="Enter note..." rows="5">{{ old('note', $slider->note) }}</textarea>
                        @if ($errors->has('note'))
                            <span class="help-block">
                            <strong>{{ $errors->first('note') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('read_more') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" id="read_more" name="read_more" placeholder="Enter read more..." value="{{ old('read_more', $slider->read_more) }}">
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
                    <input type="hidden" name="po_slider_id" value="{{ $slider->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection