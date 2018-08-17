@extends('layouts.manage')

@section('title', '| Edit Bike')

@section('content')

{!! Form::model($nduthi,['route'=>['suzuki.update', $nduthi->id], 'method'=>'PUT', 'files'=>true]) !!} <!--or use PATCH-->

<div class="col-md-8">
    {{ Form::label('name','Edit Name:')}}
    {{ Form::text('name',null, ["class" => 'form-control'])}}


    {{ Form::label('model','Edit Model:')}}
    {{ Form::text('model',null, ["class" => 'form-control'])}}


    {{ Form::label('price','Edit Price:')}}
    {{ Form::text('price',null, ["class" => 'form-control'])}}


     {{ Form::label('slug','Url:')}}
    {{ Form::text('slug',null, ["class" => 'form-control'])}}

    {{ Form::label('featured_image', 'Update Featured Image')}}
    {{ Form::file('featured_image', array('style' =>'margin-top:20px;margin-bottom:20px; background-color:green;'))}}

{{ Form::label('charges','Edit charges:')}}
{{ Form::text('charges',null, ["class" => 'form-control'])}}

</div>

<div class="col-md-4 offset-md-2">
        <div class="well">
        <dl class="dl-horizontal">
        <dt>Created At:</dt>
        <dd>Time: {{ date( 'M j, Y  H:i', strtotime($nduthi-> created_at)) }} </dd>
        </dl>

        <dl class="dl-horizontal">
        <dt>Last Updated:</dt>
        <dd>Time: {{ date( 'M j, Y  H:i',strtotime ($nduthi-> updated_at)) }} </dd>
        </dl>
        <hr>
        <div class="row">
        <div class="col-sm-6">
        {!! Html::linkRoute('suzuki.show', 'Cancel', array($nduthi->id), array('class'=>'btn btn-danger btn-block')) !!}
        
        </div>
        <div class="col-sm-6">
        {{ Form::submit('Save changes', ['class' => 'btn btn-success btn-block'])}}
        </div>


        </div>
      </div>
{!! Form::close() !!}


@endsection