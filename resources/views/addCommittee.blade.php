@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Committee</h3>
        <form action="{{route('addCommittee')}}" method="POST">
            @CSRF
            <div class="form-group">
            <label for="TCommitteeName">Committee Name</label>
            <input class="form-control" type="text"id="TCommitteeName" name="TCommitteeName" required>
            </div>

            <div class="form-group">
            <label for="TCommitteePosition">Position</label>
            <input class="form-control" type="text"id="TCommitteePosition" name="TCommitteePosition" required>
            </div>

            <div class="form-group">
            <label for="TCommitteeTemple">Temple Name</label>
            <input class="form-control" type="text"id="TCommitteeTemple" name="TCommitteeTemple" required>
            </div>

            <div class="form-group">
            <label for="TCommitteeLocation">Location</label>
            <input class="form-control" type="text"id="TCommitteeLocation" name="TCommitteeLocation" required>
            </div>

            <div class="form-group">
            <label for="TCommitteeElectedTime">Elected Time (Year)</label>
            <input class="form-control" type="number"id="TCommitteeElectedTime" name="TCommitteeElectedTime" required>
            </div>

            <div class="form-group">
            <label for="TCommitteeElectionTime">Times Elected</label>
            <input class="form-control" type="number"id="TCommitteeElectionTime" name="TCommitteeElectionTime" required>
            </div>

            <button type="submit" class="btn btn-primary">Add New</button>
            
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 