@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Giới thiệu</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Giới thiệu
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chỉnh sửa giới thiệu</h2>
            </div>
            <div class="col-md-4 m-t-20">
                <a class="btn btn-success" href="{{ url('admin/introduce/create') }}">Create</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        @foreach($intros as $intro)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Giới thiệu {{ $loop->iteration }} : </label>
                    <div class="col-md-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea disabled class="form-control" id="name" name="name" placeholder="Enter name..." rows="5">{{ old('name', $intro->name) }}</textarea>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12 form-group">
                            <textarea disabled name="note" id="note" class="form-control" placeholder="Enter note..." rows="5">{{ old('note', $intro->note) }}</textarea>
                        </div>
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/introduce/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_intro_id" value="{{ $intro->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/introduce/'.$intro->id) }}">Edit</a>
                            <button onclick="return confirm('Bạn có chắc chắn muốn xoá không?');" type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <hr>
        <div class="clearfix"></div>
    </div>
@endsection