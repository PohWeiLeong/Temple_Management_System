@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Edit Committee</h3>
        <form action="{{route('updateCommittee')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($temple_committees as $committee)
            <div class="form-group">
            <label for="TCommitteeName">Committee Name</label>
            <input type="hidden" name="id" value="{{$committee->id}}">
            <input class="form-control" type="text"id="TCommitteeName" name="TCommitteeName" required value="{{$committee->name}}">
            </div>

            <div class="form-group">
            <label for="TCommitteePosition">Position</label>
            <input class="form-control" type="text"id="TCommitteePosition" name="TCommitteePosition" required value="{{$committee->position}}">
            </div>

            <div class="form-group">
            <label for="TCommitteeTemple">Temple Name</label>
            <input class="form-control" type="text"id="TCommitteeTemple" name="TCommitteeTemple" required value="{{$committee->temple}}">
            </div>

            <div class="form-group">
            <label for="TCommitteeLocation">Location</label>
            <input class="form-control" type="text"id="TCommitteeLocation" name="TCommitteeLocation" required value="{{$committee->location}}">
            </div>

            <div class="form-group">
            <label for="TCommitteeElectedTime">Elected Time (Years)</label>
            <input class="form-control" type="number"id="TCommitteeElectedTime" name="TCommitteeElectedTime" required value="{{$committee->electedTime}}">
            </div>

            <div class="form-group">
            <label for="TCommitteeElectionTime">Time Elected</label>
            <input class="form-control" type="number"id="TCommitteeElectionTime" name="TCommitteeElectionTime" required value="{{$committee->numberOfTimesElection}}">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
            @endforeach
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 