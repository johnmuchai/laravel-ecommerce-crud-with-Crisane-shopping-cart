@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
    <div class="col-md-12">
        <h4>Logged In User Details</h4>
        <table class="table table-striped table-bordered" id="_data">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Identity</th>
      <th scope="col">Phone</th>
      <th scope="col">KRA</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>{{ Auth::user()->name}} </td>
      <td> {{ Auth::user()->email}} </td>
      <td>{{ Auth::user()->identity}} </td>
      <td>{{ Auth::user()->phone}}  </td>
      <td>{{ Auth::user()->kra}} </td>
    </tr>
  </tbody>
</table>
    </div>
</div>



<div class="row">
    <div class="col-md-7 offset-md-1">
        <table class="table table-striped table-bordered" id="_data">
  <thead>
    <tr>
    <th scope="col">Image </th>
     <th scope="col">Details</th>
      <th scope="col">Save/Remove</th>
      <th scope="col">Borrow Price</th>

     
      
    </tr>
  </thead>
  <tbody>
      @foreach( Cart::content() as $item)
        <tr>
        <td><img src="{{asset('image/'. $item->model->image) }}" alt="Smiley face"  width=200px height=100px ></td>
      <td>{{$item->name}}</td>
      <td>
      <form action="{{ route('cart.destroy', $item->rowId)}}" method="POST">
        {{ csrf_field()}}
        {{ method_field('DELETE')}}
        <button type="submit" class="btn btn-primary btn-sm" style="margin-bottom:10px;">Remove</button><br>
    </form>
          
            <button type="button" class="btn btn-secondary btn-sm">Save for Later</button>
      </td>
      <td>{{$item->price}}</td>

      
       </tr>

      @endforeach
  </tbody>
</table>
    </div>

    <div class="col-md-3 offset-md-1">
        <a href={{ url('/home')}}  class="btn btn-success" style="margin-top:10px; margin-bottom:30px;">Continue Shopping</a>
        <a href={{ url('/home')}}  class="btn btn-dark">Proceed to Checkout</a>
    </div>
</div>


<div class="row">
    <div class="col-md-6 offset-md-2">
         <table class="table table-striped table-bordered" id="_data">
            <thead>
                <tr>
                <th scope="col">Payment Details </th>
                </tr>
            </thead>
            <tbody>
  <tr>
      <td>
         Subtotal Kshs {{ Cart::subtotal()}} <br>
      </td>
      <td>
         Tax (13%) Kshs {{ Cart::tax()}} <br>
      </td>
      <td>
         Total <b> Kshs {{ Cart::total()}}</b> <br>
      </td>
      
    </tr>
  </tbody>
</table>

    </div>
<!--
<div class="row">
    <div class="col-md-4 offset-md-4">
     <p>Available Credit Wallet : Kshs </p> 
    </div>
</div>


<div class="row">
    <div class="col-md-4 offset-md-4">
     <td><a href="//{{ route('cart.index')}}" class="btn btn-primary">Borrow</a>
    </div>
</div>


-->





    
</div>
@endsection


