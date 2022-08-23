@extends('layout')
@section('content')
<div class="row"> 
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Position</td>
                    <td>Temple</td>
                    <td>Location</td>
                    <td>Elected Time (Years)</td>
                    <td>Times Elected</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($temple_committees as $committee)
                <tr>
                    <td>{{ $committee->name }}</td>
                    <td>{{ $committee->position }}</td>
                    <td>{{ $committee->temple }}</td>
                    <td>{{ $committee->location }}</td>
                    <td>{{ $committee->electedTime }}</td>
                    <td>{{ $committee->numberOfTimesElection }}</td>
                    <td><a href="{{route('editCommittee',['id'=>$committee->id])}}" class="btn btn-warning btn-xs">Edit</a></td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 