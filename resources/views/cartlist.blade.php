@extends('master')
@section('content')
<div class="custom-product">
   <div class="col-sm-10">
    <div class="trending-wrapper">
       <h4>Cart List</h4>
       <a class="btn btn-success" href="/ordernow"> Order Now</a> <br><br><br>
       @foreach ($products as $item)
           <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
             </div>
             <div class="col-sm-4">
                <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                <a class="btn btn-success" style="width: 150px" href="/ordernow"> Order Now</a> <br><br><br>
             </div>
           </div>
       @endforeach
       <a class="btn btn-success" style="width: 150px;" href="/ordernow"> Order Now</a> <br><br><br>
    </div>
 </div>
</div>
    
@endsection