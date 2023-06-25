<div class="single-product">
    <div class="product-image">
        <img src="{{$product->image_url}}" alt="#">
        <span class="sale-tag">-25%</span>
        <div class="button">
            <a href="{{route('shop.products.show' , $product->$slug) }}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
        </div>
    </div>
    <div class="product-info">
        <span class="category">Speaker</span>
        <h4 class="title">
            <a href="{{route('shop.products.show' , $product->$slug) }}"> {{$product->name}}</a>
        </h4>
        <ul class="review">
            <li><i class="lni lni-star-filled"></i></li>
            <li><i class="lni lni-star-filled"></i></li>
            <li><i class="lni lni-star-filled"></i></li>
            <li><i class="lni lni-star-filled"></i></li>
            <li><i class="lni lni-star-filled"></i></li>
            <li><span>5.0 Review(s)</span></li>
        </ul>
        <div class="price">
            <span>{{$product->price_formatted}}</span>
            @if($product->compare_price)
            <span class="discount-price">{{$product->compare_price}}</span>
            @endif
        </div>
    </div>
</div>