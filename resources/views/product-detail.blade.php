<div class="container content-area">
    <div id="sitemain" class="site-main woocommercesitefull">


        <div itemscope="" class="product type-product status-publish has-post-thumbnail first instock sale shipping-taxable purchasable product-type-simple">


            <span class="onsale">Sale!</span>
            <div class="images">
                <a href="{{ url('upload/'.$product_detail->image) }}" itemprop="image" class="woocommerce-main-image zoom" title=""
                   data-rel="prettyPhoto"><img width="250" height="300" src="{{ url('upload/'.$product_detail->image) }}"
                                               class="attachment-shop_single size-shop_single wp-post-image" alt="DNTN Tiến Đạt"
                                               title="DNTN Tiến Đạt"></a></div>

            <div class="summary entry-summary">
                <h1 itemprop="name" class="product_title entry-title">{{ $product_detail->name }}</h1><div itemprop="offers">
                    <p class="price">
                        @if($product_detail->new_price != '')
                            <del>
                                <span class="woocommerce-Price-amount amount">
                                    {{ number_format($product_detail->old_price) }}<span class="woocommerce-Price-currencySymbol"> VNĐ</span>
                                </span>
                            </del>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    {{ number_format($product_detail->new_price) }}<span class="woocommerce-Price-currencySymbol"> VNĐ</span>
                                </span>
                            </ins>
                        @else
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    {{ number_format($product_detail->old_price) }}<span class="woocommerce-Price-currencySymbol"> VNĐ</span>
                                </span>
                            </ins>
                        @endif
                    </p>
                    <meta itemprop="price" content="88">
                    <meta itemprop="priceCurrency" content="GBP">
                </div>
                <div itemprop="description">
                    <div style="font-size: 17px;">
                        {{ $product_detail->description }}
                    </div>
                </div>
            </div><!-- .summary -->


            <div class="woocommerce-tabs wc-tabs-wrapper">
                <ul class="tabs wc-tabs">
                    <li class="description_tab active">
                        <a href="#tab-description" class="defaulttab selected">Mô tả</a>
                    </li>
                </ul>
                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display: block;">
                    <h2>Mô tả sản phẩm</h2>
                    <div style="font-size: 17px;">
                        {{ $product_detail->description }}
                    </div>
                </div>
            </div>


            <meta itemprop="url" content="http://zylothemesdemo.com/zyloplus/product/sample-product-2/">

        </div><!-- #product-862 -->


    </div>
    <div class="clear"></div>
</div>