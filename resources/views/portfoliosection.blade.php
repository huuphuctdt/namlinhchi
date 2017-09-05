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
                            <?php $path_info = pathinfo(url('upload/'.$gallery->image));
                            $array = [0,293,586,879];
                            $k = array_rand($array);
                            $v = $array[$k]; ?>
                            @if($path_info['extension'] == 'mp4')
                                <div class="entry video" style="position: absolute; left: 0px; top: 0px; transform: translate3d(<?php echo $v ?>px, 0px, 0px);">
                                    <div class="holderwrap">
                                        <a class="hvr-grow video-link" id="myBtn<?php echo $stt + 1; ?>" model-id="myModal<?php echo $stt + 1; ?>" video-id="<?php echo ++$stt; ?>">
                                            <img src="{{ url('images/video-camera.jpg') }}" style="height: 219px; width: 282px;">
                                        </a>
                                        <h5>{{ $gallery->name }}</h5>
                                    </div>
                                </div>
                            @else
                                <div class="entry image" style="position: absolute; left: 0px; top: 0px; transform: translate3d(<?php echo $v ?>px, 0px, 0px);">
                                    <div class="holderwrap">
                                        <a class="hvr-grow" href="{{ url('upload/'.$gallery->image) }}" data-rel="prettyPhoto[bkpGallery]">
                                            <img src="{{ url('upload/'.$gallery->image) }}" style="height: 219px; width: 282px;">
                                        </a>
                                        <h5>{{ $gallery->name }}</h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="custombtn" style="text-align:center">
                    <a id="id-xem-hinh-anh" class="pagemore" href="{{ url('hinh-anh-cong-ty.html') }}" target="">Xem hình ảnh</a>
                </div>
            </div>
        </div><!-- .end section class -->
        <?php $stt_modal = 0;  ?>
        @foreach($gallerys as $gallery)
            <?php
                $path_info = pathinfo(url('upload/'.$gallery->image));
            ?>
            @if($path_info['extension'] == 'mp4')
                <div id="myModal<?php echo $stt_modal + 1; ?>" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-body">
                            <video style="width: 100%;" controls muted id="<?php echo ++$stt_modal; ?>">
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
            jQuery(document).ready(function (event) {
                jQuery('.video-link').click(function () {
                    var modal_id = jQuery(this).attr('model-id');
                    var video_id = jQuery(this).attr('video-id');
                    var modal = document.getElementById(modal_id);
                    modal.style.display = "block";
                    jQuery("video#"+video_id)[0].load();
                    jQuery("video#"+video_id)[0].play();
                });
                jQuery("video").prop('muted', true);
                jQuery(document).keyup(function(event) {
                    if (event.keyCode == 27) {
                        jQuery('.modal').css('display','none');
                        jQuery("video").each(function () { this.pause() });
                    }
                });
                window.onclick = function(event) {
                    if(event.target.id.indexOf("myModal") >= 0){
                        jQuery('.modal').css('display','none');
                        jQuery("video").each(function () { this.pause() });
                    }
                };
            });



        </script>
        <div class="clear"></div>
    </div><!-- container -->
</section>