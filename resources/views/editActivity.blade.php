@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Edit Activity</h3>
        <form action="{{route('updateActivity')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($activities as $activity)
            <div class="form-group">
            <label for="activityDate">Date</label>
            <input type="hidden" name="id" value="{{$activity->id}}">
            <input class="form-control" type="date"id="activityDate" name="activityDate" required value="{{$activity->date}}">
            </div>

            <div class="form-group">
            <label for="activityTime">Time</label>
            <input class="form-control" type="time"id="activityTime" name="activityTime" required value="{{$activity->time}}">
            </div>

            <div class="form-group">
            <label for="activityDescription">Description</label>
            <input class="form-control" type="text"id="activityDescription" name="activityDescription" required value="{{$activity->description}}">
            </div>

            <div class="form-group">
            <label for="activityLocation">Location</label>
            <input class="form-control" type="text"id="activityLocation" name="activityLocation" required value="{{$activity->location}}">
            </div>

            <div class="form-group">
            <label for="Event">eventID</label>
            <select name="eventID" id="eventID" class="form-control">
                @foreach($eventID as $event)
                    <option value="{{$event->id}}"
                    @if($activity->EventID==$event->id)
                        selected
                    @endif
                    >{{$event->name}}</option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            @endforeach
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 