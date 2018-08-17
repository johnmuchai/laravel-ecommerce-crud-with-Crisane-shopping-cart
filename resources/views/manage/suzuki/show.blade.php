@extends('layouts.manage')
@section('title', '| View Bike')
@section('content')


<div class="row" style="margin-top:40px;">
    <div class="col-md-8">
        <div class="image">
            <img src="{{ asset('image/'. $nduthi->image)}}" />
        </div>

     <div class="card" style="width: 30rem;">
            <div class="card-header">
               Name of Nduthi : {{ $nduthi->name}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Model of Nduthi :{{ $nduthi->model}}</li>
                <li class="list-group-item">Borrowing charges of Nduthi :{{ $nduthi->charges}}</li>
                <li class="list-group-item">Price of Nduthi :{{ $nduthi->price}}</li>
            </ul>
      </div>
    </div>

    <div class="col-md-4">
        <div class="well">

        <dl class="dl-horizontal">
        <label>Created At:</label>
        <p>{{ date( 'M j, Y  H:i', strtotime($nduthi-> created_at)) }} </p>
        </dl>

        <dl class="dl-horizontal">
        <label>Last Updated:</label>
        <p>Time: {{ date( 'M j, Y  H:i',strtotime ($nduthi-> updated_at)) }} </p>
        </dl>
        <hr>
        <dl class="dl-horizontal">
        <label>Slug:</label>
        </p><a href="{{ url('blog/'.$nduthi->slug) }}">{{url('blog/'.$nduthi->slug)}}</a></p>
        </dl>
        <hr>
            {!! Html::linkRoute('suzuki.edit', 'Edit', array($nduthi->id), array('class'=>'btn btn-primary btn-block', 'style'=>'margin-bottom:20px;')) !!}
            

            {!! Form::open(['route'=>['suzuki.destroy', $nduthi->id], 'method'=>'DELETE']) !!}
                {!! Form::submit('Delete',['class'=> 'btn btn-danger btn-block' ])!!}
            {!! FOrm::close()!!}
            
        </div>

    </div>
</div>



@endsection