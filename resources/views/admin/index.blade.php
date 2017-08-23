<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ url('upload/favicon.png') }}"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản trị - DNTN Tiến Đạt</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ url('css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Quản trị DNTN Tiến Đạt</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Thông tin</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="javascript:;" data-toggle="collapse" data-target="#ul1">
                            <i class="fa fa-fw fa-header"></i> Header <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                        <ul id="ul1" class="collapse">
                            <li>
                                <a href="/admin/logo">Logo</a>
                            </li>
                            <li>
                                <a href="/admin/menu">Menu</a>
                            </li>
                            <li>
                                <a href="/admin/slider">Slider</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admin/introduce') }}">
                            <i class="fa fa-fw fa-th"></i> Giới thiệu
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/promotion') }}">
                            <i class="fa fa-fw fa-scissors"></i> Khuyến mãi
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/product') }}">
                            <i class="fa fa-fw fa-th-list"></i> Sản phẩm
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ulpost">
                            <i class="fa fa-fw fa-th-large"></i> Bài viết <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                        <ul id="ulpost" class="collapse">
                            <li>
                                <a href="{{ url('admin/post_category') }}">Danh mục</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/post') }}">Bài viết</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admin/gallery') }}">
                            <i class="fa fa-fw fa-camera"></i> Hình ảnh công ty
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                @yield('admin-content')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ url('js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ url('js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ url('js/plugins/morris/morris-data.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('.alert_notification').delay(2000).slideUp();
        });
    </script>
</body>

</html>
