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
                    <td>Name</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->email }}</td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>  
</div> 
@endsection 