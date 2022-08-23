@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Amount</td>
                    <td>Description</td>
                    <td>UserID</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($sponsors as $sponsor)
                <tr>
                    <td>{{ $sponsor->id }}</td>
                    <td>{{ $sponsor->name }}</td>
                    <td>{{ $sponsor->amount }}</td>
                    <td>{{ $sponsor->description }}</td>
                    <td>{{ $sponsor->UserID }}</td>
                    <td><a href="{{ route('deleteSponsor',['id'=>$sponsor->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td></td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 