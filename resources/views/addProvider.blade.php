@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Provider</h3>
        <form action="{{ route('addProvider') }}" method ="POST">
            @CSRF
            <div class="form-group">
            <label for="providerName">Add New Provider</label>
            <input class="form-control" type="text" id="providerName" name="providerName" required>
            </div>

            <div class="form-group">
            <label for="providerEmail">Provider Email</label>
            <input class="form-control" type="text" id="providerEmail" name="providerEmail" required>
            </div>

            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection