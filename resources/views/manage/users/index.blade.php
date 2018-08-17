@extends('layouts.manage')
@section('content')
        <div class="row" style="background-color:#ffffff;">
                <div class="col-sm-10" >
                       <h3 style="margin-top:20px;">Manage Users</h3>
                      
                </div>
                <div class="col-sm-2">
                         <a class="btn btn-primary" href="{{route('users.create')}}" style="margin-top:10px;">Create User</a> 
                </div>
                <hr style="height:4px;color:blue">
        <div class="row" style="margin-left:40px;">
                                                <table class="table">
                                <thead class="thead-light">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                <td>
                                    <button type="button" class="btn btn-info">Update</button>
                                    <button type="button" class="btn btn-secondary">Delete</button>
                                        
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
        </div>
</div>
@endsection