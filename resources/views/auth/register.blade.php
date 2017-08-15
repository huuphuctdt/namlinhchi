<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('font-awesome/css/font-awesome.css') }}">
    <style>
        /*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
        /*
         * General styles
         */

        body, html{
            height: 100%;
            background-repeat: no-repeat;
            background-color: #d3d3d3;
            font-family: 'Oxygen', sans-serif;
        }

        .main{
            margin-top: 70px;
        }

        h1.title {
            font-size: 50px;
            font-family: 'Passion One', cursive;
            font-weight: 400;
        }

        hr{
            width: 10%;
            color: #fff;
        }

        .form-group{
            margin-bottom: 15px;
        }

        label{
            margin-bottom: 15px;
        }

        input,
        input::-webkit-input-placeholder {
            font-size: 11px;
            padding-top: 3px;
        }

        .main-login{
            background-color: #fff;
            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

        }

        .main-center{
            margin-top: 30px;
            margin: 0 auto;
            max-width: 330px;
            padding: 40px 40px;

        }

        .login-button{
            margin-top: 5px;
        }

        .login-register{
            font-size: 11px;
            text-align: center;
        }

    </style>
    <title>Admin</title>
</head>
<body>
<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">DNTN Tiến Đạt</h1>
                <hr />
                <h2>Đăng ký</h2>
            </div>
        </div>
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"  placeholder="Nhập vào Email"/>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Mật khẩu</label>
                    <div class="cols-sm-10 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Nhập vào mật khẩu"/>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Xác nhận mật khẩu</label>
                    <div class="cols-sm-10 {{ $errors->has('confirm') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Nhập vào mật khẩu xác nhận"/>
                        </div>
                        @if ($errors->has('confirm'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('confirm') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
</body>
</html>