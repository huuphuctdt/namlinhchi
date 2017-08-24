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
                                <a href="#" id="link_1">Trang chủ</a>
                            </li>
                            <li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380">
                                <a href="#" id="link_2">Giới thiệu</a>
                            </li>
                            <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69">
                                <a href="#" id="link_4">Sản phẩm</a>
                            </li>
                            <li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382">
                                <a href="#" id="link_5">Tin tức</a>
                            </li>
                            <li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382">
                                <a href="#" id="link_6">Bản đồ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget-column-3">
                    <h5>Tin tức</h5>
                    <ul class="recent-post">
                        <li>
                            <a href="#">
                                <div class="footerthumb">
                                    <img src="{{ url('/upload/post_1.jpg') }}" alt="" width="70" height="auto">
                                </div>
                            </a>
                            <strong><a href="#">Tác dụng của nấm linh chi</a></strong>
                            <p>Nấm linh chi  là vị thuốc quý từ thiên nhiên đã được sử dụng,&#8230;</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="footerthumb">
                                    <img src="{{ url('/upload/post_2.jpg') }}" alt="" width="70" height="auto">
                                </div>
                            </a>
                            <strong><a href="#">Uống nước nấm linh chi mỗi ngày có tác dụng gì ?</a></strong>
                            <p>Nấm linh chi  là vị thuốc quý từ thiên nhiên đã được sử dụng&#8230;</p>
                        </li>
                    </ul>
                </div>
                <div class="widget-column-4">
                    <h5>Liên hệ</h5>
                    <div class="contactdetail">
                        <p><i class="fa fa-map-marker"></i> {{ $footer->address }}</p>
                        <p><i class="fa fa-phone"></i>{{ $footer->phone }}</p>
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