@extends('layout.layout')
@section('content')

<!-- bannerSection -->
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('/images/ba.webp')}}" alt="First slide">
            <div class="centered">
                <h1 style="color: darkred;">Connecting Innovation </h1>
                <h2 style="color: whitesmoke;line-height:2">Explore <br> Latest in Electronics</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/msi.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/msi.jpg')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section class="w-100">
    <div class="container">
        <div class="row " style="padding-top: 30px;">
            <div class="col-md-3 row feat">
                <div class="col-md-3">
                    <img src="images/plane.png">
                </div>
                <div class="col-md-9">
                    <h3>Worldwide Shipping</h3>
                    <p>Order above Rs 100</p>
                </div>
            </div>
            <div class="col-md-3 row feat">
                <div class="col-md-3">
                    <img src="images/ret.png">
                </div>
                <div class="col-md-9">
                    <h3>Easy 30 Day Return</h3>
                    <p>Back Returns in 7 Days </p>
                </div>
            </div>
            <div class="col-md-3 row feat">
                <div class="col-md-3">
                    <img src="images/pay.png">
                </div>
                <div class="col-md-9">
                    <h3>Payment</h3>
                    <p>Secure System</p>
                    <a href="{{route('Dashboard')}}">admin</a>

                </div>
            </div>
            <div class="col-md-3 row feat feat-last">
                <div class="col-md-3">
                    <img src="images/sup.png">
                </div>
                <div class="col-md-9">
                    <h3>Easy Online Support</h3>
                    <p>Any Time Support</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Brand -->
<section style="    margin-bottom: 40px;">
    <div class="brand box bg-body-tertiary rounded container">
        <h2>Brand</h2>
        <div class="row p-2 owl-carousel owl-theme" id="brand_show">
            @foreach($Brand as $Brand)
            <div class="col item  w-50 m-auto">
                <a href="{{ route('Product-Page', ['brand' => $Brand->id]) }}">
                    <img src="{{asset('/storage/'.$Brand->Brand_Img)}}"
                        style="aspect-ratio:3/2 ;object-fit:contain;"></a>
            </div>
            @endforeach

        </div>
    </div>
</section>




<!-- new_product -->
<section>
    <div class="New_Products box bg-body-tertiary rounded container">
        <h2>Hot Products</h2>
        <div class="row row-cols-lg-3 g-2 g-lg-3">
            <div class="owl-carousel owl-theme">
                @foreach($Featured_products as $pro)
                <a href="{{url('product-detail/'.$pro->id)}}">
                    <div class="col border item ">
                        <div class="p-3">
                            <div class="new_pro">
                                <span>New</span>
                            </div>
                            <div class="pro_image">
                                <img src="{{ asset('/storage/'.$pro->Product_Img) }}" alt=""
                                    style="width: 61%;margin: auto;max-height:156px ; overflow:hidden">
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
                </a>
                @endforeach
            </div>
        </div>
    </div>

</section>
<section class="spec container " style="margin-top: 50px;">
    <div class=" w-100">
        <img src="images/spec.png" class="w-100" alt="">

    </div>
</section>
<!-- hotproduct -->

<section>
    <div class="New_Products box bg-body-tertiary rounded container  ">
        <h2>Hot Products</h2>
        <div class="row row-cols-lg-3 g-2 g-lg-3">
            <div class="owl-carousel owl-theme">
                @foreach($Featured_products as $pro)
                <a href="{{url('product-detail/'.$pro->id)}}">
                    <div class="col border item ">
                        <div class="p-3">
                            <div class="hot_pro">
                                <span>Hot</span>
                            </div>
                            <div class="pro_image">
                                <img src="{{ asset('/storage/'.$pro->Product_Img) }}" alt=""
                                    style="width: 61%;margin: auto;max-height:156px ; overflow:hidden">
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
                </a>
                @endforeach
            </div>
        </div>
    </div>

</section>
<!-- gadgets -->
<section>
    <div class="New_Products box bg-body-tertiary rounded container  ">
        <h2>Gadgets</h2>
        <div class="row row-cols-lg-3 g-2 g-lg-3">
            <div class="owl-carousel owl-theme">
                @foreach($Featured_products as $pro)
                <a href="{{url('product-detail/'.$pro->id)}}">
                    <div class="col border item ">
                        <div class="p-3">
                            <div class="hot_pro">
                                <span>Hot</span>
                            </div>
                            <div class="pro_image">
                                <img src="{{ asset('/storage/'.$pro->Product_Img) }}" alt=""
                                    style="width: 61%;margin: auto;max-height:156px ; overflow:hidden">
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
                                @if($pro->Actual_Price != null)
                                <p style="color: grey; text-decoration:line-through">
                                    NRS{{$pro->Actual_Price}}.00</p>
                                @endif
                                @if($pro->status === '1')
                                <button id="cart_btn" class="btn">Load More</button>
                                @else
                                <span style="color:red; font-size:14px">Out of Stock</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<!-- Summernote JS -->
<!-- Bootstrap JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
@endsection