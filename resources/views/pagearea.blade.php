<!-- Our services -->
<section id="pagearea">
    <div class="container">
        <h2 class="section_title">Giới thiệu</h2>
        @foreach($intros as $intro)
            @if($loop->iteration == 9)
                @break;
            @endif
            <div class="fourbox @if($loop->iteration % 4 == 0) {{ 'last_column' }} @endif">
                <div class="thumbbx">
                    <a class="hvr-rectangle-out" href="#">
                        <img src="{{ url('/upload/'.$intro->image) }}" alt=""/>
                    </a>
                </div>
                <div class="pagecontent">
                    <a href="#"><h3>{{ $intro->name }}</h3></a>
                    <p>{{ $intro->note }}</p>
                    <a class="pagemore" href="{{ $intro->read_more }}">Xem Thêm</a>
                </div>
            </div>
        @endforeach
        <div class="clear"></div>
    </div><!-- .container -->
</section><!-- #pagearea -->