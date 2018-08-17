@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered" id="_data">
  <thead>
    <tr>
      <th scope="col">Bike image</th>
      <th scope="col">Bike Name</th>
      <th scope="col">Bike Model</th>
      <th scope="col">Buy Price</th>
      <th scope="col">Borrow Price</th>
      <th scope="col">Delivery Policy</th>
      <th scope="col">Terms of Service</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td><img src="{{asset('image/'. $nduthi->image) }}" alt="Smiley face"  width=300px height=200px ></td>
      <td>{{$nduthi->name}}</td>
      <td>{{$nduthi->model}}</td>
      <td>{{$nduthi->price}}</td>
      <td>{{$nduthi->charges}}</td>
      <td>Delivery charges constitute 7% of the Borrow Price</td>
      <td>Please Read Our Terms of service before Borrowing</td>

  <td> 
  <form action="{{ route('cart.store')}}" method="POST">
    {{ csrf_field() }}

  <input type="hidden" name="id" value="{{ $nduthi->id}}">
  <input type="hidden" name="name" value="{{ $nduthi->name}}">
  <input type="hidden" name="price" value="{{ $nduthi->price}}">
  <button type="submit" class="btn btn-info">Add To Cart</button>

    </form>
    </td>
    </tr>
  </tbody>
</table>
    </div>
</div>

<div class="row" style="margin-top:25px; margin-bottom:25px; ">
  <h4>You Might Also Like</h4>
</div>

<div class="row">
        @foreach($like as $ike)
        <div class="col-md-4" style="margin-top:20px;padding:10px 15px 0px 15px;">
            
            <div class="sub_column" style="overflow:hidden;background-color:#fff;box-shadow: 3px 3px 3px 3px #a7a4a4;padding-bottom:20px;">
                <img src="{{asset('image/'. $ike->image) }}" alt="Smiley face"  width=100% height=200px >
                <div class="text-center">
                    <h5>Name: {{ $ike->name}}</h3>
                    <h5>Model: {{ $ike->model}}</h5>
                    <h5>Buy Price: {{ $ike->price}}</h5>
                    <h5>Borrow Price: {{ $ike->charges}}</h5>
                <a href="{{ url('blog/'.$ike->slug)}}" class="btn btn-info" style="margin-top:10px;">Read More</a>
            </div>
            </div>
           
         </div>
          @endforeach

    </div>


    
</div>
@endsection
