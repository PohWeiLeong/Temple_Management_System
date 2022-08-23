@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Sponsor</h3>
        <form action="{{route('addSponsor')}}" method="POST">
            @CSRF
            <div class="form-group">
            <label for="sponsorName">Sponsor Name</label>
            <input class="form-control" type="text"id="sponsorName" name="sponsorName" required>
            </div>

            <div class="form-group">
            <label for="sponsorAmount">Sponsor Amount</label>
            <input class="form-control" type="number"id="sponsorAmount" name="sponsorAmount" required>
            </div>

            <div class="form-group">
            <label for="sponsorDescription">Sponsor Description</label>
            <input class="form-control" type="text"id="sponsorDescription" name="sponsorDescription" required>
            </div>

            <div class="form-group">
            <label for="User">User</label>
            <select name="userID" id="userID" class="form-control">
                @foreach($userID as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
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