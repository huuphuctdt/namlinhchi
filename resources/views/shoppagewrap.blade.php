<!-- Recent products -->
<section style="background-color:#f7f7f7; " id="shoppagewrap" class="menu_page">
    <div class="container">
        <div class="shopwrap">
            <h2 class="section_title">Sản Phẩm</h2>
            <p>
            <div class="woocommerce columns-4">
                <ul class="products">
                    @foreach($products as $product)
                        @if($loop->iteration == 9) @break; @endif
                        <li class="post-868 product type-product status-publish has-post-thumbnail product_cat-accessories @if($loop->iteration == 1 || $loop->iteration == 5) {{ 'frist' }} @endif @if($loop->iteration == 4 || $loop->iteration == 8) {{ 'last' }} @endif
                                instock sale shipping-taxable purchasable product-type-simple">
                            <a href="#" class="woocommerce-LoopProduct-link">
                                <span class="onsale">Sale!</span>
                                <img width="250" height="300" src="{{ url('upload/'.$product->image) }}"
                                     class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product01" title="product01"/>
                                <h3>{{ $product->name }}</h3>
                                <span class="price">
                                        @if($product->new_price != '')
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    {{ number_format($product->old_price) }}<span class="woocommerce-Price-currencySymbol"> VNĐ</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    {{ number_format($product->new_price) }}<span class="woocommerce-Price-currencySymbol"> VNĐ</span>
                                                </span>
                                            </ins>
                                        @else
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    {{ number_format($product->old_price) }}<span class="woocommerce-Price-currencySymbol"> VNĐ</span>
                                                </span>
                                            </ins>
                                        @endif
                                    </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="custombtn" style="text-align:center">
                <a class="morebutton" href="#" target="">Xem sản phẩm</a>
            </div>
            </p>
        </div><!-- .end section class -->
        <div class="clear"></div>
    </div><!-- container -->
</section>