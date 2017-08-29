<!-- Our services -->
<section id="pagearea">
    <div class="container">
        <h2 class="section_title">Giới thiệu</h2>
        @foreach($intros as $intro)
            @if($per_intro != null && $loop->index == $per_intro) @break; @endif
            <div class="fourbox @if($loop->iteration % 4 == 0) {{ 'last_column' }} @endif">
                <div class="thumbbx">
                    <a class="hvr-rectangle-out" href="{{ url('gioi-thieu-'.$intro->id.'.html') }}">
                        <img src="{{ url('/upload/'.$intro->image) }}" alt=""/>
                    </a>
                </div>
                <div class="pagecontent">
                    <a href="{{ url('gioi-thieu-'.$intro->id.'.html') }}"><h3>{{ $intro->name }}</h3></a>
                    <p>{{ $intro->note }}</p>
                    <a class="pagemore" href="{{ url('gioi-thieu-'.$intro->id.'.html') }}">Xem Thêm</a>
                </div>
            </div>
        @endforeach
        <div class="clear"></div>
    </div><!-- .container -->
</section><!-- #pagearea -->