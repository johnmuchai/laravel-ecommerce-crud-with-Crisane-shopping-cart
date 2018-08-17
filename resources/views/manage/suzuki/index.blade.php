@extends('layouts.manage')
@section('title', '| All Bikes')
@section('content')

<div class="row" style="margin-top:40px; margin-bottom:10px">
    <div class="col-md-9">
        <h3>All Nduthi</h3>
    </div>
 <div class="col-md-3">
 <a href="{{ route('suzuki.create')}}" class="btn btn-primary btn btn-block">Create New Nduthi</a>
 </div>
 <hr>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered" id="_data">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bike Name</th>
      <th scope="col">Bike Model</th>
      <th scope="col">Buy Price</th>
      <th scope="col">Borrow Price</th>
      <th scope="col">Slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($nduthi as $bike)
        <tr>
        <th scope="row">{{$bike->id}}</th>
      <td>{{$bike->name}}</td>
      <td>{{$bike->model}}</td>
      <td>{{$bike->price}}</td>
      <td>{{$bike->charges}}</td>
      <td>{{$bike->slug}}</td>
        <td><a href="{{route('suzuki.show', $bike->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('suzuki.edit', $bike->id)}}" class="btn btn-secondary">Edit</a>
    </td>
    </tr>

      @endforeach
  </tbody>
</table>
    </div>
</div>

@endsection