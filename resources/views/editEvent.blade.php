@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Edit Event</h3>
        <form action="{{route('updateEvent')}}" method="POST">
            @CSRF
            @foreach($events as $event)
            <div class="form-group">
            <label for="eventName">Event Name</label>
            <input type="hidden" name="id" value="{{$event->id}}">
            <input class="form-control" type="text"id="eventName" name="eventName" required value="{{$event->name}}">
            </div>

            <div class="form-group">
            <label for="eventTitle">Title</label>
            <input class="form-control" type="text"id="eventTitle" name="eventTitle" required value="{{$event->title}}">
            </div>

            <div class="form-group">
            <label for="eventDate">Date</label>
            <input class="form-control" type="date"id="eventDate" name="eventDate" required value="{{$event->date}}">
            </div>

            <div class="form-group">
            <label for="eventTime">Time</label>
            <input class="form-control" type="time"id="eventTime" name="eventTime" required value="{{$event->time}}">
            </div>

            <div class="form-group">
            <label for="eventDescription">Description</label>
            <input class="form-control" type="text"id="eventDescription" name="eventDescription" required value="{{$event->description}}">
            </div>

            <div class="form-group">
            <label for="eventLocation">Location</label>
            <input class="form-control" type="text"id="eventLocation" name="eventLocation" required value="{{$event->location}}">
            </div>

            <div class="form-group">
            <label for="Supplier">Supplier</label>
            <select name="supplierID" id="supplierID" class="form-control">
                @foreach($supplierID as $supplier)
                    <option value="{{$supplier->id}}"
                    @if($event->SupplierID==$supplier->id)
                        selected
                    @endif
                    >{{$supplier->name}}</option>
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