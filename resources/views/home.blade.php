@extends('layouts.app')

@section('content')
<div class="container" style="background-color:#e6ecf0;">
    <div class="row">
        @foreach($nduthi as $bike)
        <div class="col-md-4" style="margin-top:20px;padding:10px 15px 0px 15px;">
            
            <div class="sub_column" style="overflow:hidden;background-color:#fff;box-shadow: 3px 3px 3px 3px #a7a4a4;padding-bottom:20px;">
                <img src="{{asset('image/'. $bike->image) }}" alt="Smiley face"  width=100% height=200px >
                <div class="text-center">
                    <h5>Name: {{ $bike->name}}</h3>
                    <h5>Model: {{ $bike->model}}</h5>
                    <h5>Buy Price: {{ $bike->price}}</h5>
                    <h5>Borrow Price: {{ $bike->charges}}</h5>
                <a href="{{ url('blog/'.$bike->slug)}}" class="btn btn-info" style="margin-top:10px;">Read More</a>
            </div>
            </div>
           
         </div>
          @endforeach

    </div>
</div>
@endsection


<!--

<div class="col-sm-12 col-md-4" id="facets" style="padding:10px 15px 0px 15px;">
                        <div class="sub_column"  style="overflow:hidden;
  background-color:#fff;
  box-shadow: 3px 3px 3px 3px #a7a4a4;
  padding-bottom:20px; ">
                            <img src="styles/img/test.jpg" alt="Event" width=100%; height=215px;>
                            <div class="text-center">
                                <h6>DATE</h6>
                                <h6>NAME OF EVENT</h6>
                                <h6>LOCATION</h6>
                                <button type="button" class="btn btn-sm" id="buy_ticket">Buy Ticket</button>
                            </div>
                        </div>
                </div>
            -->