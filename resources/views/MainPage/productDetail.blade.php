@extends('layout.layout')
@section('content')

<section class="flat-product-detail style1 ">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 border-end">
                <div class="description-image ">
                    <div class="box-image"><img src="{{asset('/Storage/'.$Product->Product_Img)}}" alt=""
                            style="width: 75%; margin: auto"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-detail style1"><span class="bg"></span>
                    <div class="header-detail">
                        <h4 class="name">{!! $Product->HighLight_Heading !!}</h4>
                        <div class="category">{{$Product->Type}}</div>
                    </div>
                    <div class="content-detail">
                        <div class="info-text">{!! $Product->HighLight_Desc !!}</div>
                        <hr>
                        <div class="price mt-4">
                            <p id="price">NRS{{$Product->Offer_Price}}.00</p>
                            <p style="color: grey; text-decoration:line-through;">
                                NRS{{$Product->Actual_Price}}.00</p>
                        </div>
                    </div>
                    <div class="footer-detail">
                        @if($Product->status == 0 )
                        <div class="quanlity-box">
                            <div class=""><span style="color: rgb(255, 0, 0);"><a href="#" rel="noopener"
                                        style="color: rgb(255, 0, 0);">The Product is out of stock (Click
                                        Here)</a></span></div>
                        </div>
                        @else 
                        <button class="btn btn-danger">Order</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flat-product-content style1 ">
    <div class="container ">
        <div class="row pb-5  p-4">
            <div class="col-md-2 ">
                <h3 class="p-3" style="background-color: rgb(204, 204, 204); border-radius: 4px;">Specifications</h3>
            </div>
            <div class="col-md-12 pl-5">
                <div class="tecnical-specs">
                    {!! $Product->Specification !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="rating">
                    <div class="title">Based on 3 reviews</div>
                    <div class="score">
                        <div class="average-score">
                            <p class="numb">4.3</p>
                            <p class="text">Average score</p>
                        </div>
                        <div class="queue"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-review style1">
                    <h3>Add a review</h3>
                    <div class="your-rating queue"><span>Your Rating</span><i class="fa fa-star"
                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                            aria-hidden="true"></i></div>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Summary</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Review</label>
                            <textarea type="text" class="form-control" id="name"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="New_Products box bg-body-tertiary rounded container  ">
        <h2>Hot Products</h2>
        <div class="row row-cols-lg-3 g-2 g-lg-3">
            <div class="owl-carousel owl-theme">
                @foreach($popular_products as $pro)
                <div class="col border item ">
                    <div class="p-3">
                        <div class="hot_pro">
                            <span>Hot</span>
                        </div>
                        <div class="pro_image">
                            <img src="{{ asset('/storage/'.$pro->Product_Img) }}" alt=""
                                style="width: 61%;margin: auto;">
                        </div>
                        <hr>
                        <div class="spec text-center">
                            <div class="div">
                                <p id="heading">{!! $pro->HighLight_Heading !!}</p>
                            </div>
                            <div class="queue"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                    aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                    class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                    aria-hidden="true"></i>
                            </div>

                            <p id="price">NRS{{$pro->Offer_Price}}.00</p>
                            <p style="color: grey; text-decoration:line-through">
                                NRS{{$pro->Actual_Price}}.00</p>
                            @if($pro->status === '1')
                            <button id="cart_btn" class="btn">Load More</button>
                            @else
                            <span style="color:red; font-size:14px">Out of Stock</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>


@endsection