@extends('layout.layout')
@section('content')
<section>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3 left-col  border-end">
                <h3>Filter</h3>

                <div class="filter_head " style="margin-top: 20px;margin-bottom: 20px;">
                    <h6 class="sort-font">Sort By:</h6>
                    <ul class="p-0 d-flex ">
                        <li><a href="{{ URL::current() }}" class="sort-font btn border m-1">All</a></li>
                        <li><a href="{{ URL::current()."?sort=newest" }}" class="sort-font btn border m-1">Newest</a>
                        </li>
                        <li><a href="{{ URL::current()."?sort=popularity" }}"
                                class="sort-font btn border m-1">Popularity</a></li>
                    </ul>
                </div>
                <div class="filter_head " style="margin-top: 42px;margin-bottom: 14px;">
                    <h6>Collection</h6>
                    <ul class="p-0 d-flex" style="margin-top: 10px;">

                        <li><a href="{{ URL::current()."?sort=Laptop" }}" class="sort-font btn border m-1">
                                Laptop
                            </a>
                        </li>
                        <li><a href="{{ URL::current()."?sort=Gadgets" }}" class="sort-font btn border m-1">Gadgets</a>
                        </li>
                    </ul>
                </div>
                <div class="filter_head " style="margin-top: 42px;margin-bottom: 14px;">
                    <h6>Category</h6>
                    <ul class="p-0 d-flex " style="margin-top: 10px;">
                        <li><a href="{{ URL::current()."?sort=Gaming" }}" class="sort-font btn border m-1">Gaming
                                Series</a></li>
                        <li><a href="{{ URL::current()."?sort=Other_series" }}" class="sort-font btn border m-1">Other
                                Series</a></li>
                    </ul>
                </div>

                <div class="filter_head " style="margin-top: 42px;margin-bottom: 14px;">
                    <h6>Brand</h6>
                    <ul class="p-0 d-flex " style="margin-top: 10px;flex-wrap: wrap;">
                        @foreach($Brand as $Brand)
                        <?php $id = $Brand->id; ?>
                        <li>
                            <a href="{{ URL::current().'?brand='.$Brand->id }}" class="sort-font btn border d-flex m-1">
                                <img src="{{ asset('/storage/'.$Brand->Brand_Img) }}"
                                    style="height: 18px;text-align:center;margin-top:2px" alt="">
                                {{$Brand->Brand_Name}}
                            </a>
                        </li>
                        @endforeach

                    </ul>

                </div>



            </div>

            <div class="col-9 right-col">
                <div class="d-flex">
                    <h4 class="bold btn border" style="margin-right: 10px;">Result For:</h4>
                    @if( $Brand_Name != null)
                    <h4 class="btn"> {{$Brand_Name->Brand_Name}} </h4>
                    @else
                    <h4 class="btn"> {{$record}} </h4>
                    @endif
                </div>

                @if($pro_filtered != null )
                <div class="products mt-3">
                    @foreach($pro_filtered as $pro)
                    <a href="{{url('product-detail/'.$pro->id)}}">
                        <div class="pro_box border card p-2">
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
                                <p style="color: grey; text-decoration:line-through;">
                                    NRS{{$pro->Actual_Price}}.00</p>
                                <button id="cart_btn" class="btn">Load More</button>
                            </div>
                        </div>
                    </a>

                    @endforeach
                </div>

                @else
                <div class="container">
                    <div class="text-center">
                        <h1 style="color:grey;margin-left:20px;margin-top:20px">No Result Found</h1>
                    </div>
                    <img src="{{asset('brand/nodata.png')}}" style="width:60% ; margin:auto" alt="">
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection