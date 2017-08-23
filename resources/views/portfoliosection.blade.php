<section style="background-color:#ffffff; padding-top: 0;" id="portfoliosection" class="menu_page">
    <div class="container">
        <div class="gallerywrap fadeInRight">
            <h2 class="section_title">Hình ảnh công ty</h2>
            <div class="photobooth">
                <ul class="portfoliofilter clearfix">
                    <li><a class="selected" data-filter="*" href="#">Tất cả</a><span></span></li>
                    <li><a data-filter=".image" href="#">Hình ảnh</a></li>
                    <li><a data-filter=".video" href="#">Video</a></li>
                </ul>
                <div class="row fourcol portfoliowrap">
                    <div class="portfolio isotope" style="position: relative; overflow: hidden; height: 458px;">
                        <?php $stt = 0; ?>
                        @foreach($gallerys as $gallery)
                            <?php
                            $path_info = pathinfo(url('upload/'.$gallery->image));
                            ?>
                            @if($path_info['extension'] == 'mp4')
                                <div class="entry video" style="position: absolute; left: 0px; top: 0px; transform: translate3d(293px, 0px, 0px);">
                                    <div class="holderwrap">
                                        <a class="hvr-grow video-link" id="myBtn<?php echo ++$stt; ?>">
                                            <img src="{{ url('images/video-camera.png') }}" style="height: 219px; width: 282px;">
                                        </a>
                                        <h5>{{ $gallery->name }}</h5>
                                    </div>
                                </div>
                            @else
                                <div class="entry image" style="position: absolute; left: 0px; top: 0px; transform: translate3d(586px, 0px, 0px);">
                                    <div class="holderwrap">
                                        <a class="hvr-grow" href="{{ url('upload/'.$gallery->image) }}" data-rel="prettyPhoto[bkpGallery]">
                                            <img src="{{ url('upload/'.$gallery->image) }}" style="height: 219px; width: 282px;">
                                        </a>
                                        <h5>{{ $gallery->name }}</h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        {{--<div class="entry image" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">--}}
                            {{--<div class="holderwrap">--}}
                                {{--<a class="hvr-grow" href="http://zylothemesdemo.com/zyloplus/wp-content/uploads/2017/02/blog2.jpg" data-rel="prettyPhoto[bkpGallery]">--}}
                                    {{--<img src="http://zylothemesdemo.com/zyloplus/wp-content/uploads/2017/02/blog2.jpg" style="height: 219px; width: 282px;">--}}
                                {{--</a>--}}
                                {{--<h5>DNTN Tiến Đạt</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="entry image" style="position: absolute; left: 0px; top: 0px; transform: translate3d(293px, 0px, 0px);">--}}
                            {{--<div class="holderwrap">--}}
                                {{--<a class="hvr-grow" href="http://zylothemesdemo.com/zyloplus/wp-content/uploads/2017/02/blog1.jpg" data-rel="prettyPhoto[bkpGallery]">--}}
                                    {{--<img src="http://zylothemesdemo.com/zyloplus/wp-content/uploads/2017/02/blog1.jpg" style="height: 219px; width: 282px;">--}}
                                {{--</a>--}}
                                {{--<h5>DNTN Tiến Đạt</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="entry video" style="position: absolute; left: 0px; top: 0px; transform: translate3d(586px, 0px, 0px); height: 229px;">--}}
                            {{--<div class="holderwrap">--}}
                                {{--<a class="hvr-grow" href="{{ url('upload/hinh1.jpg') }}" data-rel="prettyPhoto[bkpGallery]">--}}
                                    {{--<img src="{{ url('upload/hinh1.jpg') }}" style="height: 219px; width: 282px;">--}}
                                {{--</a>--}}
                                {{--<h5>DNTN Tiến Đạt</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="entry video" style="position: absolute; left: 0px; top: 0px; transform: translate3d(879px, 0px, 0px);">--}}
                            {{--<div class="holderwrap">--}}
                                {{--<a class="hvr-grow" class="video-link" id="myBtn1">--}}
                                    {{--<img src="http://zylothemesdemo.com/zyloplus/wp-content/uploads/2017/02/blog3.jpg" style="height: 219px; width: 282px;">--}}
                                {{--</a>--}}
                                {{--<h5>DNTN Tiến Đạt</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="entry video" style="position: absolute; left: 0px; top: 0px; transform: translate3d(879px, 0px, 0px);">--}}
                            {{--<div class="holderwrap">--}}
                                {{--<a class="hvr-grow" class="video-link" id="myBtn2">--}}
                                    {{--<img src="http://zylothemesdemo.com/zyloplus/wp-content/uploads/2017/02/blog3.jpg" style="height: 219px; width: 282px;">--}}
                                {{--</a>--}}
                                {{--<h5>DNTN Tiến Đạt</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="entry video" style="position: absolute; left: 0px; top: 0px; transform: translate3d(293px, 0px, 0px);">--}}
                            {{--<div class="holderwrap">--}}
                                {{--<a class="hvr-grow" class="video-link" id="myBtn3">--}}
                                    {{--<img src="http://zylothemesdemo.com/zyloplus/wp-content/uploads/2017/02/blog3.jpg" style="height: 219px; width: 282px;">--}}
                                {{--</a>--}}
                                {{--<h5>DNTN Tiến Đạt</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div><!-- .end section class -->
        <?php $stt_modal = 0;  ?>
        @foreach($gallerys as $gallery)
            <?php
                $path_info = pathinfo(url('upload/'.$gallery->image));
            ?>
            @if($path_info['extension'] == 'mp4')
                <div id="myModal<?php echo ++$stt_modal; ?>" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-body">
                            <video style="width: 100%;" controls muted>
                                <source src="{{ url('upload/'.$gallery->image) }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <style>
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 200px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                border: 1px solid #888;
                width: 50%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s
            }

            /* Add Animation */
            @-webkit-keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

            @keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .modal-header {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
                padding: 2px 16px;
                background-color: #5cb85c;
                color: white;
            }
        </style>
        <script>
            jQuery(document).ready(function () {
                jQuery('.video-link').click(function () {
                    var modal_id = jQuery(this).attr('id');
                   // alert(modal_id);
                    var btn = document.getElementById(modal_id);
                    btn.click(function () {
                        alert('123123');
                    });
                });
            });
            // Get the modal
//            jQuery(document).ready(function () {
//
//
//
//                var modal1 = document.getElementById('myModal1');
//                var modal2 = document.getElementById('myModal2');
//                var modal3 = document.getElementById('myModal3');
//                var modal4 = document.getElementById('myModal4');
//
//                var btn1 = document.getElementById("myBtn1");
//                var btn2 = document.getElementById("myBtn2");
//                var btn3 = document.getElementById("myBtn3");
//                var btn4 = document.getElementById("myBtn4");
//
//
//                btn1.onclick = function() {
//                    modal1.style.display = "block";
//                    jQuery("video")[0].load();
//                    jQuery("video")[0].play();
//                    jQuery("video").prop('muted', true);
//
//                };
//                btn2.onclick = function() {
//                    modal2.style.display = "block";
//                    jQuery("video")[1].load();
//                    jQuery("video")[1].play();
//                    jQuery("video").prop('muted', true);
//
//                };
//                btn3.onclick = function() {
//                    modal3.style.display = "block";
//                    jQuery("video")[2].load();
//                    jQuery("video")[2].play();
//                    jQuery("video").prop('muted', true);
//
//                };
//                btn4.onclick = function() {
//                    modal4.style.display = "block";
//                    jQuery("video")[3].load();
//                    jQuery("video")[3].play();
//                    jQuery("video").prop('muted', true);
//
//                };
//
//                window.onclick = function(event) {
//                    if (event.target == modal1) {
//                        modal1.style.display = "none";
//                        jQuery("video").each(function () { this.pause() });
//                    }
//                    if (event.target == modal2) {
//                        modal2.style.display = "none";
//                        jQuery("video").each(function () { this.pause() });
//                    }
//                    if (event.target == modal3) {
//                        modal3.style.display = "none";
//                        jQuery("video").each(function () { this.pause() });
//                    }
//                    if (event.target == modal4) {
//                        modal4.style.display = "none";
//                        jQuery("video").each(function () { this.pause() });
//                    }
//                };
//
//                jQuery(document).keyup(function(event) {
//                    if (event.keyCode == 27) {
//                        var modal1 = document.getElementById('myModal1');
//                        var modal2 = document.getElementById('myModal2');
//                        var modal3 = document.getElementById('myModal3');
//                        var modal4 = document.getElementById('myModal4');
//                        modal1.style.display = "none";
//                        modal2.style.display = "none";
//                        modal3.style.display = "none";
//                        modal4.style.display = "none";
//                        jQuery("video").each(function () { this.pause() });
//                    }
//                });
//
//                jQuery("video").prop('muted', false);
//            });

        </script>
        <div class="clear"></div>
    </div><!-- container -->
</section>