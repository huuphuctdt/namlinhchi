@extends('admin.index')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Footer</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Footer
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chi tiết footer</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/footer') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/introduce/edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="introduction">Giới thiệu : </label>
                    <div class="col-md-8 {{ $errors->has('introduction') ? ' has-error' : '' }}">
                        <input class="form-control" id="introduction" name="introduction" placeholder="Enter introduction..."  value="{{ old('introduction', $footer->introduction) }}">
                        @if ($errors->has('introduction'))
                            <span class="help-block">
                            <strong>{{ $errors->first('introduction') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Địa chỉ : </label>
                    <div class="col-md-8 {{ $errors->has('address') ? ' has-error' : '' }}">
                        <input class="form-control" id="address" name="address" placeholder="Enter address..."  value="{{ old('address', $footer->address) }}">
                        @if ($errors->has('address'))
                            <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Số điện thoại : </label>
                    <div class="col-md-8 {{ $errors->has('phone') ? ' has-error' : '' }}">
                        <input class="form-control" id="phone" name="phone" placeholder="Enter phone..."  value="{{ old('phone', $footer->phone) }}">
                        @if ($errors->has('phone'))
                            <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Email : </label>
                    <div class="col-md-8 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input class="form-control" id="email" name="email" placeholder="Enter email..."  value="{{ old('email', $footer->email) }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Facebook : </label>
                    <div class="col-md-8 {{ $errors->has('facebook') ? ' has-error' : '' }}">
                        <input class="form-control" id="facebook" name="facebook" placeholder="Enter facebook..."  value="{{ old('facebook', $footer->facebook) }}">
                        @if ($errors->has('facebook'))
                            <span class="help-block">
                            <strong>{{ $errors->first('facebook') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Twitter : </label>
                    <div class="col-md-8 {{ $errors->has('twitter') ? ' has-error' : '' }}">
                        <input class="form-control" id="twitter" name="twitter" placeholder="Enter twitter..."  value="{{ old('twitter', $footer->twitter) }}">
                        @if ($errors->has('twitter'))
                            <span class="help-block">
                            <strong>{{ $errors->first('twitter') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Linkedin : </label>
                    <div class="col-md-8 {{ $errors->has('linkedin') ? ' has-error' : '' }}">
                        <input class="form-control" id="linkedin" name="linkedin" placeholder="Enter linkedin..."  value="{{ old('linkedin', $footer->linkedin) }}">
                        @if ($errors->has('linkedin'))
                            <span class="help-block">
                            <strong>{{ $errors->first('linkedin') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Google Plus : </label>
                    <div class="col-md-8 {{ $errors->has('google-plus') ? ' has-error' : '' }}">
                        <input class="form-control" id="google-plus" name="google-plus" placeholder="Enter google-plus..."  value="{{ old('google-plus', $footer->getAttribute('google-plus')) }}">
                        @if ($errors->has('google-plus'))
                            <span class="help-block">
                            <strong>{{ $errors->first('google-plus') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="">
                    <label class="control-label col-md-2" for="image">Copy Right : </label>
                    <div class="col-md-8 {{ $errors->has('copy-right') ? ' has-error' : '' }}">
                        <input class="form-control" id="copy-right" name="copy-right" placeholder="Enter copy-right..."  value="{{ old('copy-right', $footer->getAttribute('copy-right')) }}">
                        @if ($errors->has('copy-right'))
                            <span class="help-block">
                            <strong>{{ $errors->first('copy-right') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <input type="hidden" name="po_footer_id" value="{{ $footer->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection