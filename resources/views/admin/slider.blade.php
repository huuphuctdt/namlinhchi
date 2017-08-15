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
                <h2>Config Slider</h2>
            </div>
            <div class="col-md-4 m-t-20">
                <a class="btn btn-success" href="{{ url('admin/slider/create') }}">Create</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        @foreach($sliders as $slider)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Slider {{ $loop->iteration }} : </label>
                    <div class="col-md-3 {{ $errors->has('caption') ? ' has-error' : '' }}">
                        <textarea disabled class="form-control" id="caption" name="caption" placeholder="Enter caption..." rows="5">{{ old('caption', $slider->caption) }}</textarea>
                        @if ($errors->has('caption'))
                            <span class="help-block">
                                <strong>{{ $errors->first('caption') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12 form-group">
                            <textarea disabled name="note" id="note" class="form-control" placeholder="Enter note..." rows="5">{{ old('note', $slider->note) }}</textarea>
                        </div>
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/slider/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_slider_id" value="{{ $slider->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/slider/'.$slider->id) }}">Edit</a>
                            <button onclick="return confirm('Bạn có chắc chắn muốn xoá không? \nNếu xoá sẽ mất tất cả các menu con!');" type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <hr>
        <div class="clearfix"></div>
    </div>
@endsection