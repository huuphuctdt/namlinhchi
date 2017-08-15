<section style="background-color:#dd3333;
        background-image:url({{ '/images/probanner.jpg' }});
        background-repeat:no-repeat; background-position: center top; background-attachment:fixed; background-size:cover; " id="promosection" class="menu_page">
    <div class="container">
        <div class="">
            <div class="promo-box" style="color:#ffffff;">
                <div class="promo-left">
                    <h3 style="color:#ffffff;">{{ $promotions->name }}</h3>
                    {{ $promotions->note }}
                </div>

                <div class="promo-right">
                    <div class="morebutton" style="background-color:#ffffff;">
                        <a href="#" style="color:#dd3333 !important;" id="btn-mua-ngay">MUA NGAY!</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div><!-- .end section class -->
        <div class="clear"></div>
    </div><!-- container -->
</section>