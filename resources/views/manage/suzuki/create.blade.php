@extends('layouts.manage')
@section('title', '| Create New Bike')
@section('content')
    <div class="row" style="background-color:#ffffff;">
                <div class="col-sm-10" >
                       <h3 style="margin-top:20px;">Create New Bike</h3>
                </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            {!! Form::open(array('route'=>'suzuki.store','files'=>true)) !!}

                {{ Form::label('name', 'Name:')}}
                {{ Form::text('name', null, array('class'=>'form-control'))}}

                {{ Form::label('model', 'Model:')}}
                {{ Form::text('model', null, array('class'=>'form-control'))}}

               

                {{ Form::label('price', 'Price:')}}
                {{ Form::text('price', null, array('class'=>'form-control'))}}

                {{ Form::label('charges', 'Borrowing Charges:')}}
                {{ Form::text('charges', null, array('class'=>'form-control'))}}


                 {{ Form::label('slug', 'Slug:')}}
                {{ Form::text('slug', null, array('class'=>'form-control', 'min-length'=>'5', 'maxlength'=>'255'))}}

                {{ Form::label('featured_image','Upload Featured Image')}}
                {{Form::file('featured_image',array('class' =>'btn btn-success btn-sm btn-block','style'=>'margin-top:20px; backgrond-color:rgba(0,255,127,0.6);')) }}

                {{ Form::submit('Create Nduthi', array('class'=>'btn btn-info btn-lg btn-block mt-3'))}}
            {!! Form::close() !!}

        </div>
    </div>


    
@endsection