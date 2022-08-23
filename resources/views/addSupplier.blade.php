@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Supplier</h3>
        <form action="{{ route('addSupplier') }}" method ="POST">
            @CSRF
            <div class="form-group">
            <label for="supplierName">Add New Supplier</label>
            <input class="form-control" type="text" id="supplierName" name="supplierName" required>
            </div>

            <div class="form-group">
            <label for="supplierEmail">Supplier Email</label>
            <input class="form-control" type="text" id="supplierEmail" name="supplierEmail" required>
            </div>

            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection