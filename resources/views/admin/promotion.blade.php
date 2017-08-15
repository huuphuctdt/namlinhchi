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
                <h2>Chỉnh sửa khuyến mãi</h2>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        @foreach($promotions as $promotion)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Khuyến mãi : </label>
                    <div class="col-md-3 {{ $errors->has('caption') ? ' has-error' : '' }}">
                        <textarea disabled class="form-control" id="caption" name="caption" placeholder="Enter caption..." rows="5">{{ old('caption', $promotion->name) }}</textarea>
                        @if ($errors->has('caption'))
                            <span class="help-block">
                                <strong>{{ $errors->first('caption') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12 form-group">
                            <textarea disabled name="note" id="note" class="form-control" placeholder="Enter note..." rows="5">{{ old('note', $promotion->note) }}</textarea>
                        </div>
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/promotion/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_slider_id" value="{{ $promotion->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/promotion/'.$promotion->id) }}">Edit</a>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <hr>
        <div class="clearfix"></div>
    </div>
@endsection