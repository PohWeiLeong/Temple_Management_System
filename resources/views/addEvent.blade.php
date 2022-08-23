@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Event</h3>
        <form action="{{route('addEvent')}}" method="POST">
            @CSRF
            <div class="form-group">
            <label for="eventName">Event Name</label>
            <input class="form-control" type="text"id="eventName" name="eventName" required>
            </div>

            <div class="form-group">
            <label for="eventTitle">Event Title</label>
            <input class="form-control" type="text"id="eventTitle" name="eventTitle" required>
            </div>

            <div class="form-group">
            <label for="eventDate">Event Date</label>
            <input class="form-control" type="date"id="eventDate" name="eventDate" required>
            </div>

            <div class="form-group">
            <label for="eventTime">Event Time</label>
            <input class="form-control" type="time"id="eventTime" name="eventTime" required>
            </div>

            <div class="form-group">
            <label for="eventDescription">Event Description</label>
            <input class="form-control" type="text"id="eventDescription" name="eventDescription" required>
            </div>

           <div class="form-group">
            <label for="eventLocation">Event Location</label>
            <input class="form-control" type="text"id="eventLocation" name="eventLocation" required>
            </div>

            <div class="form-group">
            <label for="Supplier">Supplier</label>
            <select name="supplierID" id="supplierID" class="form-control">
                @foreach($supplierID as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
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