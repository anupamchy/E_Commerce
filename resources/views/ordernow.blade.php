@extends('master')
@section('content')
<div class=" container custom-product">
<br><br>
<div col-sm-4>
    <table class="table table-striped">
        <tbody>
          <tr>
            <td>Price</td>
            <td>{{$total}} Rupees</td>
          </tr>
          <tr>
            <td>Tax:</td>
            <td>0 Rupees</td>
          </tr>
          <tr>
            <td>Delivery Charges:</td>
            <td>40 Ruppes</td>
          </tr>
          <tr>
            <td>Total Ammount:</td>
            <td>{{$total+ 40}} Rupees</td>
          </tr>
        </tbody>
      </table>
      <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Addres:</label>
          <textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
        </div>
        <div class="form-group">
        <label for="pwd">Payment Method</label>
        <p> <input type="radio" value="cash" name="payment"><span>Online Payment</span></p>
        <p> <input type="radio" value="cash" name="payment"><span>EMI Payment</span></p>
        <p> <input type="radio" value="cash" name="payment"><span>Payment On delievery</span></p>
        </div>
        <button type="submit" class="btn btn-default">Order Now</button>
      </form>
</div>
</div>
    
@endsection