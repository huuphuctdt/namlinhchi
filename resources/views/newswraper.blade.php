<!-- Last news -->
<section style="background-color:#ffffff; " id="newswraper" class="menu_page">
        <div class="container">
            <div class="blogpostwrap">
                <h2 class="section_title">Tin tức</h2>
                <div class="fourcolumn-news">
                    @foreach($posts as $post)
                        @if($loop->iteration == 5) @break; @endif
                        <div class="news-box @if($loop->iteration == 4) {{ 'last' }} @endif">
                            <div class="news-thumb">
                                <a class="hvr-grow" href="{{ url('/tin-tuc/'.str_slug($post->post_category->name).'/'.str_slug($post->name).'-'.$post->id.'.html') }}">
                                    <img src="{{ url('/upload/'.$post->image) }}" alt=" "/>
                                </a>
                                <div class="postdt"><span>{{ $post->date }}</span> {{ $post->month }}</div>
                            </div>
                            <div class="newsdesc">
                                <h6><a href="{{ url('/tin-tuc/'.str_slug($post->post_category->name).'/'.str_slug($post->name).'-'.$post->id.'.html') }}">{{ $post->name }}</a></h6>
                                <div class="PostMeta">
                                    <span>Đăng bởi : <a href="{{ url('/') }}">DNTN Tiến Đạt</a></span>
                                </div>
                                <p>{{ $post->content }}</p>
                                <a class="buttonstyle1" href="{{ url('/tin-tuc/'.str_slug($post->post_category->name).'/'.str_slug($post->name).'-'.$post->id.'.html') }}">Đọc thêm</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div><!-- .end section class -->
            <div class="clear"></div>
        </div><!-- container -->
    </section>