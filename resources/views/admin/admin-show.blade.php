@extends('admin.index')
@section('admin-content')
    <meta name="_token" content="{{csrf_token()}}">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Chức năng hiển thị</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Chức năng hiển thị
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <hr>
        <div id="result-change"></div>
        @foreach($admins as $admin)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">{{ $admin->menu }} </label>
                    <div class="col-md-3">
                        <label class="switch">
                            <input class="is_show" id="{{ $admin->id }}" name="is_show" type="checkbox" @if($admin->is_show == 1) {{ 'checked' }} @endif>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
        @endforeach
        <form action="{{ url('admin/change-number-slider') }}" method="post">
        {{ csrf_field() }}
        <div class="row form-group">
            <div class="form-group">
                <label class="control-label col-md-2" for="pwd">Số lượng Slider</label>
                <div class="col-md-1">
                    <input class="form-control" id="number_slider" name="number_slider" type="number" value="{{ $per_slider }}">
                </div>
                <div class="col-md-1">
                    <input type="submit" class="btn btn-primary" value="Xác nhận" name="submit">
                </div>
            </div>
        </div>
        </form>
        <form action="{{ url('admin/change-number-intro') }}" method="post">
        {{ csrf_field() }}
        <div class="row form-group">
            <div class="form-group">
                <label class="control-label col-md-2" for="pwd">Số lượng giới thiệu</label>
                <div class="col-md-1">
                    <select id="number_intro" name="number_intro" class="form-control">
                        <option value="4" @if($per_intro == 4) {{ "selected" }}@endif>4</option>
                        <option value="8" @if($per_intro == 8) {{ "selected" }}@endif>8</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <input type="submit" class="btn btn-primary" value="Xác nhận" name="submit">
                </div>
            </div>
        </div>
        </form>
        <hr>
        <div class="clearfix"></div>
    </div>
    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {display:none;}

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #5cb85c;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #5cb85c;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <script type="text/javascript">
        window.onload = function() {
            jQuery(document).on('change', '.is_show', function () {
                jQuery.ajaxSetup({
                    headers: { 'X-CSRF-Token' : jQuery('meta[name=_token]').attr('content') }
                });
                var _token  = jQuery('meta[name=_token]').attr('content');
                //var column = jQuery(this).attr('id');
                var id = jQuery(this).attr('id');
                jQuery.ajax({
                    url: '/admin/change-is-show',
                    dataType: 'json',
                    type: 'post',
                    contentType: 'application/x-www-form-urlencoded',
                    data: {id: id, _token : _token },
                    success: function( data, textStatus, jQxhr ){
                        if(data.result){
                            jQuery('.alert_notification').remove();
                            jQuery('#result-change').css("display","block");
                            jQuery('#result-change').append("<div class='alert alert-success alert_notification'>Cập nhật thành công</div>").delay(2000).slideUp();
                        }else{
                            jQuery('.alert_notification').remove();
                            jQuery('#result-change').css("display","block");
                            jQuery('#result-change').append("<div class='alert alert-danger alert_notification'>Cập nhật thất bại</div>").delay(2000).slideUp();
                        }
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        jQuery('.alert_notification').remove();
                        jQuery('#result-change').css("display","block");
                        jQuery('#result-change').append("<div class='alert alert-danger alert_notification'>Cập nhật thất bại</div>").delay(2000).slideUp();
                    }
                });
            });
        };
    </script>
@endsection