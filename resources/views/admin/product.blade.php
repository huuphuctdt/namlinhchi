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
                <h2>Chỉnh sửa sản phẩm</h2>
            </div>
            <div class="col-md-4 m-t-20">
                <a class="btn btn-success" href="{{ url('admin/product/create') }}">Create</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        @foreach($products as $product)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Sản phẩm {{ $loop->iteration }} : </label>
                    <div class="col-md-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea disabled class="form-control" id="name" name="name" placeholder="Enter name..." rows="5">{{ old('name', $product->name) }}</textarea>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12 form-group">
                            <textarea disabled name="description" id="description" class="form-control" placeholder="Enter note..." rows="5">{{ old('note', $product->description) }}</textarea>
                        </div>
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/product/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_product_id" value="{{ $product->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/product/'.$product->id) }}">Edit</a>
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