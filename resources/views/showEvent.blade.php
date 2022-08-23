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
                    <td>Title</td>
                    <td>Date</td>
                    <td>Time</td>
                    <td>Description</td>
                    <td>Location</td>
                    <td>SupplierID</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->time }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->SupplierID }}</td>
                    <td><a href="{{route('editEvent',['id'=>$event->id])}}" class="btn btn-warning btn-xs">Edit</a><a href="{{ route('deleteEvent',['id'=>$event->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 