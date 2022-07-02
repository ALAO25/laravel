@extends('app')

@section('content')
<h1 class="page header text-center">My First Laravel Database</h1>
<div class="row">
    <div  class="col-md-12 col-md-offset-1">
        <h2> Members Table 
            <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary">Add</button>
        </h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Action</th>
            </thead>
            <tbody> 
                @foreach($members as $member)
                    <tr>
                        <td> {{ $member->firstname }} </td>
                        <td> {{ $member->lastname }} </td>
                        <td>
                            <a href="#edit{{$member->id}}" data-bs-toggle="modal" class="btn btn-success">Edit</a>
                            <a href="{{ url('delete/'.$member->id)}}" class="btn btn-danger">Delete</a>
                            @include('action')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 
