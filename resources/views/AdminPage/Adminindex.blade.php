@extends('layout.adminlayout')
@section('content')
<div class="cardBox">
    <div class="card1">
        <div>
            <div class="numbers">1,504</div>
            <div class="CardName">Daily Views</div>
        </div>
        <div class="iconBox">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
    </div>
    <div class="card1">
        <div>
            <div class="numbers">1,504</div>
            <div class="CardName">Daily Views</div>
        </div>
        <div class="iconBox">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
    </div>
    <div class="card1">
        <div>
            <div class="numbers">1,504</div>
            <div class="CardName">Daily Views</div>
        </div>
        <div class="iconBox">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
    </div>
    <div class="card1">
        <div>
            <div class="numbers">1,504</div>
            <div class="CardName">Daily Views</div>
        </div>
        <div class="iconBox">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
    </div>
</div>
<!-- order detail list -->
<div class="details">
    <div class="recentorders" style="display: block;">
        <div class="cardHeader">
            <h2>Recent Orders</h2>
            <a href="" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td style="text-align: center;">Image</td>
                    <td style="text-align: center;">Name</td>
                    <td style="text-align: center;">Price</td>
                    <td>Quantity</td>
                    <td style="text-align: center;">Status</td>
                </tr>
            </thead>
            <tbody>
                @foreach($Products as $Pro)
                <tr>
                    <td> <img style="width: 60px;" src="{{asset('/storage/'.$Pro->Product_Img)}}" alt=""> </td>
                    <td style="text-align: center;" > {{ $Pro->product_name }}</td>
                    <td>{{ $Pro->Actual_Price }}</td>
                    <td style="text-align: center;">{{ $Pro->Quantity }}</td>
                    @if($Pro->status == '1')
                        <td style="text-align: center;"><span class="status delivered">Available</span></td>
                        @else
                        <td style="text-align: center;"> <span class="status pending">Out of Stock</span></td>
                    @endif

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- New Customers -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Total Brands</h2>
        </div>
        <table>
            @foreach($Brands as $Brands)
            <tr>
                <td width="60px">
                    <div class="imgbox">
                        <img src="{{ asset('/storage/'.$Brands->Brand_Img) }}">
                    </div>
                </td>
                <td>
                    <h4>{{ $Brands->Brand_Name }}</h4>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

</div>

</div>




@endsection