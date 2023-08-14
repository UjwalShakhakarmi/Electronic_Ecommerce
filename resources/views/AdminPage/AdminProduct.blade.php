@extends('layout.adminlayout')
@section('content')

<section class="container p-5">
 
    <table class="table shadow border">
        <thead class="table-secondary">
            <th>SN</th>
            <th colspan="2">Name</th>
            <th>Brand</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <?php $i=1 ?>
        @foreach($Product as $Product)

        <tbody>
            <td>{{ $i++ }}</td>
            <td><img src="{{asset( '/storage/'.$Product->Product_Img) }}" alt="" style="height: 50px;"></td>
            <td>{{ $Product->product_name }}</td>
            <td><img src="{{asset('/storage/'. $Product->brand->Brand_Img) }}" alt="" style="height: 40px;"></td>
            <td>
                    @if($Product->status == '1')
                    <span class="status delivered">Available</span>
                    @else
                    <span class="status pending">Out of Stock</span> 
                    @endif  
            </td>
            <td>
                <a href="{{ url('/product-edit/'.$Product->id) }}" style="color: black;font-size:23px"><ion-icon name="create-outline"></ion-icon></a>
                <a href="{{url('/Product-delete/'.$Product->id)}}" style="color: black;font-size:23px;margin-left:10px"><ion-icon name="trash-outline"></ion-icon></a>
            </td>
        </tbody>
        @endforeach

    </table>
</section>




@endsection