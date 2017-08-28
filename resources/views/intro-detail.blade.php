<div class="container content-area">
    <div class="middle-align">
        <div class="site-main sitefull">
            <header><h1 class="entry-title">Giới thiệu công ty</h1></header>
            <div class="blog-post-repeat">
                <article id="post-343"
                         class="post-343 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                    <header class="entry-header">
                        <div class="post-thumb">
                            <a href="{{ url('gioi-thieu-'.$intro_detail->id.'.html') }}">
                                <img width="150" height="150" src="{{ url('upload/'.$intro_detail->image) }}" class="alignleft wp-post-image" alt="Giới thiệu DNTN Tiến Đạt">
                            </a>
                        </div><!-- post-thumb -->

                    </header><!-- .entry-header -->

                    <div class="entry-summary">
                        <div>{{ $intro_detail->note }}</div>
                    </div><!-- .entry-summary -->

                </article><!-- #post-## -->
                <div class="spacer20"></div>
            </div><!-- blog-post-repeat -->
        </div>
        <div class="clear"></div>
    </div>
</div>