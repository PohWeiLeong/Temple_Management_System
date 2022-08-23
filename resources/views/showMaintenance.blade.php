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
                    <td>Location</td>
                    <td>ProviderID</td>
                </tr>
            </thead>
            <tbody>
                @foreach($maintenances as $maintenance)
                <tr>
                    <td>{{ $maintenance->id }}</td>
                    <td>{{ $maintenance->date }}</td>
                    <td>{{ $maintenance->time }}</td>
                    <td>{{ $maintenance->location }}</td>
                    <td>{{ $maintenance->ProviderID }}</td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 