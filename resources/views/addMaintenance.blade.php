@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Maintenance</h3>
        <form action="{{route('addMaintenance')}}" method="POST">
            @CSRF
            <div class="form-group">
            <label for="maintenanceDate">Maintenance Date</label>
            <input class="form-control" type="date"id="maintenanceDate" name="maintenanceDate" required>
            </div>

            <div class="form-group">
            <label for="maintenanceTime">Maintenance Time</label>
            <input class="form-control" type="time"id="maintenanceTime" name="maintenanceTime" required>
            </div>

            <div class="form-group">
            <label for="maintenanceLocation">Maintenance Location</label>
            <input class="form-control" type="text"id="maintenanceLocation" name="maintenanceLocation" required>
            </div>

            <div class="form-group">
            <label for="Provider">Provider</label>
            <select name="providerID" id="providerID" class="form-control">
                @foreach($providerID as $provider)
                    <option value="{{$provider->id}}">{{$provider->name}}</option>
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