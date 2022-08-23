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
                    <td>Date</td>
                    <td>Time</td>
                    <td>Description</td>
                    <td>Location</td>
                    <td>EventID</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->id }}</td>
                    <td>{{ $activity->date }}</td>
                    <td>{{ $activity->time }}</td>
                    <td>{{ $activity->description }}</td>
                    <td>{{ $activity->location }}</td>
                    <td>{{ $activity->EventID }}</td>
                    <td><a href="{{route('editActivity',['id'=>$activity->id])}}" class="btn btn-warning btn-xs">Edit</a><a href="{{ route('deleteActivity',['id'=>$activity->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 