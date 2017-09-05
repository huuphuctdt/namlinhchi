<div class="container">
    <header class="entry-header">
        <h1 class="entry-title">Sản phẩm</h1>
    </header><!-- .entry-header -->
    <div class="">
        <p>
        <div class="woocommerce columns-4">
            <ul class="products">
                @foreach($products as $product)
                    <li class="post-868 product type-product status-publish has-post-thumbnail product_cat-accessories @if($loop->iteration == 1 || ($loop->iteration / 4 == 1)) {{ 'frist' }} @endif
                    @if($loop->iteration % 4 == 0) {{ 'last' }} @endif
                            instock sale shipping-taxable purchasable product-type-simple">
                        <a href="{{ url('san-pham-'.$product->id.'.html') }}" class="woocommerce-LoopProduct-link">
                            <span class="onsale">Sale!</span>
                            <img width="250" height="300" src="{{ url('upload/'.$product->image) }}"
                                 class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{ $product->image }}" title="{{ $product->image }}"/>
                            <h3>{{ $product->name }}</h3>
                            <span class="price">
                                @if(trim($product->new_price) != '')
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
        </p>
    </div><!-- .end section class -->
    <div class="clear"></div>
</div><!-- container -->