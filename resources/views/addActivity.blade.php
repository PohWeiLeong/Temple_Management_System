@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Activity</h3>
        <form action="{{route('addActivity')}}" method="POST">
            @CSRF
            <div class="form-group">
            <label for="activityDate">Activity Date</label>
            <input class="form-control" type="date"id="activityDate" name="activityDate" required>
            </div>

            <div class="form-group">
            <label for="activityTime">Activity Time</label>
            <input class="form-control" type="time"id="activityTime" name="activityTime" required>
            </div>

            <div class="form-group">
            <label for="activityDescription">Activity Description</label>
            <input class="form-control" type="text"id="activityDescription" name="activityDescription" required>
            </div>

           <div class="form-group">
            <label for="activityLocation">Activity Location</label>
            <input class="form-control" type="text"id="activityLocation" name="activityLocation" required>
            </div>

            <div class="form-group">
            <label for="Event">Event</label>
            <select name="eventID" id="eventID" class="form-control">
                @foreach($eventID as $event)
                    <option value="{{$event->id}}">{{$event->name}}</option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
            
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 