@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Sản phẩm mới nhất</h2>
    @foreach ($all_product as $key=>$product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{asset ('public/uploads/product/'.$product->product_image) }}" height="200px" alt="" />
                    <h2>{{number_format ((float)$product->product_price).' '.'VND' }}</h2>
                    <p>{{ $product->product_name }}</p>
                    <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}" class="btn btn-default add-to-cart">
                        <i class="fa fa-info-circle"></i>Chi tiết sản phẩm</a>
                </div>
                
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                </ul>
            </div>
        </div>
    </div>    
    @endforeach
</div><!--features_items-->

@endsection