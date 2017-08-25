<div class="header">
    <div class="container">
        <div class="logo">
            <div class="site-branding-text ">
                <a href="{{ url('/') }}">
                    <img src="{{ url('upload/'.$header->logo) }}" alt="logo" title="logo">
                    <!--<h1>Test</h1>-->
                </a>
                <span class="tagline">{{ $header->tagline }}</span>
            </div>
        </div><!-- .logo -->

        <div class="header_right">
            <div class="toggle">
                <a class="toggleMenu" href="#">
                    Menu
                </a>
            </div><!-- toggle -->
            <div class="sitenav">
                <div class="menu-primary-container">
                    <ul id="menu-primary" class="menu">
                        <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64">
                            <a href="{{ url('/'.'#link_1') }}" id="link_1">Trang chủ</a>
                        </li>
                        <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64">
                            <a href="{{ url('/'.'#link_2') }}" id="link_2">Giới thiệu</a>
                        </li>
                        <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64">
                            <a href="{{ url('/'.'#link_4') }}" id="link_4">Sản phẩm</a>
                        </li>
                        <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64">
                            <a href="{{ url('/'.'#link_5') }}" id="link_5">Tin tức</a>
                        </li>
                        <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64">
                            <a href="{{ url('/'.'#link_6') }}" id="link_6">Bản đồ</a>
                        </li>
                        {{--@foreach($menus as $menu)--}}
                        {{--<li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64">--}}
                            {{--<a id="link_{{ $loop->iteration}}" href="{{ $menu->link }}">{{ $menu->name }}</a>--}}
                            {{--<a id="link_{{ $loop->iteration}}">{{ $menu->name }}</a>--}}
                            {{--<ul class="sub-menu">--}}
                                {{--@foreach($menu->menu_child as $item)--}}
                                {{--<li id="menu-item-393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-393">--}}
                                    {{--<a href="{{ $item->link }}">{{ $item->name }}</a>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    </ul>
                </div>
            </div><!--.sitenav -->
        </div><!--header_right-->
        <div class="clear"></div>
    </div><!-- .container-->

</div><!-- .header -->