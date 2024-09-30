@extends('layouts.app')
@section('content')
<div class="container mt-5">
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="company_name" class="form-label">Company Name</label>
        <input type="text" name="company_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="product_name" class="form-label">Product Name</label>
        <input type="text" name="product_name" class="form-control" required>
    </div>
   
    <button type="submit" class="btn btn-primary">Save Company</button>
</form>

</div>
@endsection