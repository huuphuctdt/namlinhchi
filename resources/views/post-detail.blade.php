<div class="container content-area">
    <div class="middle-align">
        <div class="site-main singleright" id="sitemain">
            <article id="post-343" class="single-post post-343 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                <div class="blog-post-repeat">
                    <header class="entry-header">
                        <h1 class="entry-title">{{ $post->name }}</h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <div class="postmeta">
                            <div class="post-date">{{ $post->month }} {{ $post->date }}, {{ $post->year }}</div><!-- post-date -->
                            <div class="clear"></div>
                        </div><!-- postmeta -->
                        <div class="post-thumb"><img width="375" height="291" src="{{ url('upload/'.$post->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="{{ $post->image }}"
                             sizes="(max-width: 375px) 100vw, 375px"></div>
                        <div class="content-post">{{ $post->content }}</div>
                        <div class="postmeta">
                            <div class="post-categories"><a href="{{ url('/tin-tuc/'.str_slug($post->post_category->name)) }}" title="{{ $post->post_category->name }}">{{ $post->post_category->name }}</a></div>
                            <div class="post-tags"> </div>
                            <div class="clear"></div>
                        </div><!-- postmeta -->
                    </div><!-- .entry-content -->

                    <footer class="entry-meta">
                    </footer><!-- .entry-meta -->
                </div>
            </article>                	<nav role="navigation" id="nav-below" class="post-navigation">
                <h4 class="screen-reader-text">Post navigation</h4>


                <div class="nav-previous"><a href="{{ url('/') }}" rel="prev"><span class="meta-nav">←</span> Trang chủ</a></div>
                <div class="clear"></div>
            </nav><!-- #nav-below -->
        </div>
        <div id="sidebar">
            @foreach($post_category as $post_cate)
            <a href="{{ url('/tin-tuc/'.str_slug($post->post_category->name)) }}"><h3 class="widget-title">{{ $post_cate->name }}</h3></a>
            <aside id="%1$s" class="widget %2$s">
                <ul>
                    @foreach($post_cate->post as $item)
                    <li>
                        <a href="{{ url('/tin-tuc/'.str_slug($post_cate->name).'/'.str_slug($item->name).'-'.$item->id.'.html') }}">{{ $item->name }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </aside>
            @endforeach
        </div><!-- sidebar -->
        <div class="clear"></div>
    </div>
</div>