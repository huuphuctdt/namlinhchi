<!-- Footer -->
<div id="footer-wrapper">
        <div class="container footer">

            <!-- =============================== Column One - 1 =================================== -->

            <!-- =============================== Column Fourth - 4 =================================== -->

            <div class="cols-4">
                <div class="widget-column-1">
                    <h5>Giới thiệu</h5>
                    <p>{{ $footer->introduction }}</p>
                    <div class="clear"></div>
                </div>

                <div class="widget-column-2">
                    <h5>Menu</h5>
                    <div class="menu-footer-menu-container">
                        <ul id="menu-footer-menu" class="menu">
                            <li id="menu-item-48" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-48">
                                <a href="{{ url('/') }}" id="link_1">Trang chủ</a>
                            </li>
                            <li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380">
                                <a href="{{ url('/#link_2') }}" id="link_2">Giới thiệu</a>
                            </li>
                            <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69">
                                <a href="{{ url('/#link_4') }}" id="link_4">Sản phẩm</a>
                            </li>
                            <li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382">
                                <a href="{{ url('/#link_5') }}" id="link_5">Tin tức</a>
                            </li>
                            <li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382">
                                <a href="{{ url('/#link_6') }}" id="link_6">Bản đồ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget-column-3">
                    <h5>Tin tức</h5>
                    <ul class="recent-post">
                        @foreach($top_2_post as $item)
                            <li>
                                <a href="{{ url('/tin-tuc/'.str_slug($item->post_category->name).'/'.str_slug($item->name).'-'.$item->id.'.html') }}">
                                    <div class="footerthumb">
                                        <img src="{{ url('/upload/'.$item->image) }}" alt="" width="70" height="auto">
                                    </div>
                                </a>
                                <strong><a href="#">{{ mb_strimwidth($item->name,0,65,'...') }}</a></strong>
                                <p>{{ mb_strimwidth($item->content,0,200,'...') }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget-column-4">
                    <h5>Liên hệ</h5>
                    <div class="contactdetail">
                        <p><i class="fa fa-map-marker"></i> {{ $footer->address }}</p>
                        <p><i class="fa fa-phone"></i><a href="tel:01234567890">{{ $footer->phone }}</a></p>
                        <p><i class="fa fa-envelope"></i><a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a></p>
                    </div>

                    <div class="social-icons">
                        <a href="{{ $footer->facebook }}" target="_blank" class="fa fa-facebook" title="facebook"></a>
                        <a href="{{ $footer->twitter }}" target="_blank" class="fa fa-twitter" title="twitter"></a>
                        <a href="{{ $footer->linkedin }}" target="_blank" class="fa fa-linkedin" title="linkedin"></a>
                        <a href="{{ $footer->getAttribute('google-plus') }}" target="_blank" class="fa fa-google-plus" title="google-plus"></a>
                    </div>

                </div>

                <div class="clear"></div>
            </div><!--end .cols-4-->

            <div class="clear"></div>

        </div><!--end .container-->

        <div class="copyright-wrapper">
            <div class="container">
                <div class="copyright-txt">{{ $footer->getAttribute('copy-right') }}</div>
            </div>
            <div class="clear"></div>
            </div>
        </div>

</div>