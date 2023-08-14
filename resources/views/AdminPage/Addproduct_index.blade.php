@extends('layout.adminlayout')
@section('content')
<!-- heading -->
<div class="Product_head p-5">
    <form action="{{route('save_product')}}" enctype="multipart/form-data" style="padding: 15px 30px 30px 30px;"
        class="shadow" method="post">
        @csrf

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="Product-tab" data-bs-toggle="tab" data-bs-target="#Product"
                    type="button" role="tab" aria-controls="Product" aria-selected="true">Product</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Description-tab" data-bs-toggle="tab" data-bs-target="#Description"
                    type="button" role="tab" aria-controls="Description" aria-selected="false">Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="SEO-tab" data-bs-toggle="tab" data-bs-target="#SEO" type="button"
                    role="tab" aria-controls="SEO" aria-selected="false">SEO</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="status-tab" data-bs-toggle="tab" data-bs-target="#status" type="button"
                    role="tab" aria-controls="status" aria-selected="false">Product Status</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Product" role="tabpanel" aria-labelledby="home-tab">
                <section>
                    <div class="container" style="padding-top: 20px;">
                        @if(session('status'))
                        <div class="message alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                        @endif
                        <div class="heading">
                            <h3>Add Product</h3>
                        </div>
                        <div class="mb-3">
                            <label for="Product-Name" class="form-label">Product Name:</label>
                            <input type="text" class="form-control @error('Brand') is-invalid @enderror"
                                name="product_name">
                            <p style="color: red;"> @error('product_name'){{$message}}@enderror</p>

                        </div>
                        <div class="mb-3">
                            <label for="Product-category" class="form-label">Product Category:</label>
                            <select class="form-select @error('Brand') is-invalid @enderror" name="Category">
                                <option value=""> select</option>
                                <option value="Gaming Series">Gaming Series</option>
                                <option value="Other Series">Other Series</option>
                            </select>
                            <p style="color: red;"> @error('Category'){{$message}}@enderror</p>

                        </div>
                        <div class="mb-3">
                            <label for="Product-Type" class="form-label">Product Type:</label>
                            <select id="Product-Type" class="form-select @error('Brand') is-invalid @enderror"
                                name="Type">
                                <option value=""> select Category</option>
                                <option value="Laptop"> Laptop</option>
                                <option value="Other Accessories"> Other Accessories</option>
                            </select>
                            <p style="color: red;"> @error('Type'){{$message}}@enderror</p>

                        </div>
                        <div class="mb-3">
                            <label for="Product-Brand" class="form-label">Product Brand:</label>
                            <select id="Product-Brand" class="form-select @error('Brand') is-invalid @enderror"
                                name="Brand">
                                <option value=""> select Brand</option>
                                @foreach ($BrandData as $Brand)
                                <option value="{{ $Brand->id }}">{{$Brand->Brand_Name}}</option>
                                @endforeach
                            </select>
                            <p style="color: red;"> @error('Brand'){{$message}}@enderror</p>
                        </div>
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="mb-3 ">
                                <label for="Product-Price" class="form-label">Actual Price:</label>
                                <input type="number" class="form-control @error('Actual_Price') is-invalid @enderror"
                                    name="Actual_Price">
                                <p style="color: red;"> @error('Actual_Price'){{$message}}@enderror</p>
                            </div>
                            <div class="mb-3">
                                <label for="Product-Price" class="form-label">Offer Price:</label>
                                <input type="number" class="form-control @error('Offer_Price') is-invalid @enderror"
                                    name="Offer_Price">
                                <p style="color: red;"> @error('Offer_Price'){{$message}}@enderror</p>
                            </div>
                            <div class="mb-3">
                                <label for="Product-Quantity" class="form-label">Quantity:</label>
                                <input type="number" class="form-control @error('Quantity') is-invalid @enderror"
                                    name="Quantity">
                                <p style="color: red;"> @error('Quantity'){{$message}}@enderror</p>
                            </div>
                            <div class="mb-3">
                                <label for="Product-Priority" class="form-label">Priority:</label>
                                <input type="number" class="form-control @error('Priority') is-invalid @enderror"
                                    name="Priority">
                                <p style="color: red;"> @error('Priority'){{$message}}@enderror</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="Product-Image" class="form-label">Product Image:</label>
                            <input type="file" class="form-control @error('Brand') is-invalid @enderror"
                                name="Product_Img">
                            <p style="color: red;"> @error('Product_Img'){{$message}}@enderror</p>
                        </div>

                        <div class="mb-3">
                            <label for="Product-Description" class="form-label"> Description:</label>
                            <textarea class="form-control" id="summernote_Desc" placeholder="Product Description"
                                name="Description" style="height: 100px"></textarea>
                            <p style="color: red;"> @error('Description'){{$message}}@enderror</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="Description" role="tabpanel" aria-labelledby="profile-tab">
                <section>
                    <div class="container" style="padding-top: 20px;">
                        <div class="heading">
                            <h3>Add Description</h3>
                        </div>
                        <div class="mb-3">
                            <label for="Product-Name" class="form-label"> HighLight:</label>
                            <input type="text" class="form-control @error('HighLight_Heading') is-invalid @enderror"
                                name="HighLight_Heading" placeholder="Hightlight Heading">
                            <p style="color: red;"> @error('HighLight_Heading'){{$message}}@enderror</p>
                        </div>
                        <div class="mb-3">21
                            <label for="Product-Description" class="form-label"> Product Description:</label>
                            <textarea class="form-control" placeholder="Product Description"
                                id="summernote_Hight_Design" name="HighLight_Desc" style="height: 100px"></textarea>
                            <p style="color: red;"> @error('HighLight_Desc'){{$message}}@enderror</p>
                        </div>
                        <div class="mb-3">
                            <label for="Product-Specification" class="form-label"> Product Specification:</label>
                            <textarea class="form-control" placeholder="Product Specification" name="Specification"
                                id="summernote_spec" style="height: 100px"></textarea>
                            <p style="color: red;"> @error('Specification'){{$message}}@enderror</p>
                        </div>
                    </div>
                </section>
            </div>



            <div class="tab-pane fade" id="SEO" role="SEO" aria-labelledby="SEO-tab">
                <section>
                    <div class="container" style="padding-top: 20px;">
                        <div class="heading">
                            <h3>Add SEO</h3>
                        </div>
                        <div class="mb-3">
                            <label for="Meta-tag" class="form-label"> Meta Title:</label>
                            <input type="text" class="form-control @error('Meta') is-invalid @enderror"
                                name="Meta_Title" placeholder="Hightlight Heading">
                            <p style="color: red;"> @error('Meta_Title'){{$message}}@enderror</p>
                        </div>
                        <div class="mb-3">
                            <label for="Meta-Description" class="form-label"> Meta Description:</label>
                            <textarea class="form-control" placeholder="Meta Description" name="Meta_Desc"
                                id="summernote_Meta_Desc" style="height: 100px"></textarea>
                            <p style="color: red;"> @error('Meta_Desc'){{$message}}@enderror</p>
                        </div>
                        <div class="mb-3">
                            <label for="Meta-Keyword" class="form-label"> Meta Keywords:</label>
                            <textarea class="form-control" placeholder="Meta Keyword" name="Meta_Key"
                                style="height: 100px"></textarea>
                            <p style="color: red;"> @error('Meta_Key'){{$message}}@enderror</p>
                        </div>
                    </div>
                </section>
            </div>


            <div class="tab-pane fade" id="status" role="status" aria-labelledby="status-tab">
                <section>
                    <div class="container" style="padding-top: 20px;">
                        <div class="heading">
                            <h3>Add Product Status</h3>
                        </div>
                        <div class="row">
                            <div class="mb-3 p-2">
                                <div class="form-group">
                                    <label for="">New Arrivals</label>
                                    <input type="checkbox" name="new_arrival" class="form-check-input">
                                </div>
                            </div>
                            <div class="mb-3 p-2">
                                <label for="">Featured Products</label>
                                <input type="checkbox" name="Featured_products" class="form-check-input">
                            </div>
                            <div class="mb-3 p-2">
                                <div class="form-group">
                                    <label for="">Popular Products</label>
                                    <input type="checkbox" name="popular_products" class="form-check-input">
                                </div>
                            </div>
                            <div class="mb-3 p-2">
                                <div class="form-group">
                                    <label for="">Offer Products</label>
                                    <input type="checkbox" name="offers_products" class="form-check-input">
                                </div>
                            </div>
                            <div class="mb-3 p-2">
                                <label for="">Show/Hide</label>
                                <input type="checkbox" name="status" class="form-check-input">

                            </div>
                            <div class="w-100 text-center">
                                <button type="submit" class="btn btn-success w-50 "
                                    style="height: 50px;">Submit</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </form>



    @endsection