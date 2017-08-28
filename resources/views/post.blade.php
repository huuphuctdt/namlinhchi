<div class="container content-area">
    <div class="middle-align">
        <div class="site-main flotRight" id="sitemain">
            <header><h1 class="entry-title">{{ $name_postcategory }}</h1></header>
            @foreach($post_all as $post)
                <div class="blog-post-repeat">
                <article id="post-343"
                         class="post-343 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                    <header class="entry-header">
                        <h3 class="post-title">
                            <a href="{{ url('/tin-tuc/'.$category.'/'.str_slug($post->name).'-'.$post->id.'.html') }}" rel="bookmark">
                                {{ $post->name }}
                            </a>
                        </h3>
                        <div class="postmeta">
                            <div class="post-date">{{ $post->month }} {{ $post->date }}, {{ $post->year }}</div><!-- post-date -->
                            <div class="post-categories"> | <a href="{{ url('/tin-tuc/'.$category) }}" title="{{ $post->post_category->name }}">{{ $post->post_category->name }}</a></div>
                            <div class="clear"></div>
                        </div><!-- postmeta -->
                        <div class="post-thumb">
                            <a href="{{ url('/tin-tuc/'.$category.'/'.str_slug($post->name).'-'.$post->id.'.html') }}">
                                <img width="150" height="150" src="{{ url('upload/'.$post->image) }}" class="alignleft wp-post-image" alt="">
                            </a>
                        </div><!-- post-thumb -->
                    </header><!-- .entry-header -->

                    <div class="entry-summary">
                        <div>{{ $post->content }}</div>
                        <p class="read-more">
                            <a href="{{ url('/tin-tuc/'.$category.'/'.str_slug($post->name).'-'.$post->id.'.html') }}">Đọc thêm</a>
                        </p>
                    </div><!-- .entry-summary -->

                </article><!-- #post-## -->
                <div class="spacer20"></div>
            </div><!-- blog-post-repeat -->
            @endforeach
            <div class="">
               {{ $post_all->links() }}
            </div>
        </div>
        <div id="sidebar" style="float:left;">
            @foreach($post_category as $post_cate)
                <a href="{{ url('/tin-tuc/'.str_slug($post_cate->name)) }}"><h3 class="widget-title">{{ $post_cate->name }}</h3></a>
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
<style>
    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px;
    }
    .pagination>li {
        display: inline;
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #dd3333;
        border-color: #337ab7;
    }
    .pagination>li>a, .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #dd3333;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }
</style>