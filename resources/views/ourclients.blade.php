<!-- Our partner -->
<section style="background-color:#FCFCFC; " id="ourclients" class="menu_page">
        <div class="container-fluid">
            <div class="client-wrap">
                <h2 class="section_title">Bản đồ</h2>
                <p>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaZlRC0DwkT2Ltmny5EN9SDM7wA4lfY58&callback=initMap"></script>
                <div style='overflow:hidden;height:400px;width:100%;'>
                    <div id='gmap_canvas' style='height:400px;width:100%;'></div>
                <script type='text/javascript'>
                    function initMap() {
                        var map = new google.maps.Map(document.getElementById('gmap_canvas'), {
                            zoom: 16,
                            center:new google.maps.LatLng(10.3670602,105.43189640000003),
                        });
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(10.3670602,105.43189640000003),
                            map: map
                        });
                        var infowindow = new google.maps.InfoWindow({content:'<strong>DNTN Tiến Đạt</strong><br>81, Nguyễn Văn Linh<br> An Giang<br>'});
                        google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
                        }
                </script>
                <p>
                <div class="subtitle" style="font-size:15px; color:#111111; margin:0 0 50px 0; text-align:center;">
                    Đây là địa điểm cở sở chúng tôi nuôi trồng nấm linh chi.
                </div>
                <ul id="flexiselDemo3">
                    <li><a href="#" target="_blank"><img src="{{ url('/images/client-logo1.jpg') }}"/></a></li>
                    <li><a href="#" target="_blank"><img src="{{ url('/images/client-logo2.jpg') }}"/></a></li>
                    <li><a href="#" target="_blank"><img src="{{ url('/images/client-logo3.jpg') }}"/></a></li>
                    <li><a href="#" target="_blank"><img src="{{ url('/images/client-logo4.jpg') }}"/></a></li>
                    <li><a href="#" target="_blank"><img src="{{ url('/images/client-logo5.jpg') }}"/></a></li>
                    <li><a href="#" target="_blank"><img src="{{ url('/images/client-logo6.jpg') }}"/></a></li>
                </ul>
                </p>
            </div><!-- .end section class -->
            <div class="clear"></div>
        </div><!-- container -->
</section>