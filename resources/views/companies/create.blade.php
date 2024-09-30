@extends('layouts.app')
@section('content')
<div class="container mt-5">
<form action="{{ route('companies.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="company_name" class="form-label">Company Name</label>
        <input type="text" name="company_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="company_address" class="form-label">Address</label>
        <input type="text" name="company_address" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="company_contact" class="form-label">Contact</label>
        <input type="text" name="company_contact" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="company_poc" class="form-label">Person Of Contact</label>
        <input type="text" name="company_poc" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="company_desc" class="form-label">Description</label>
        <input type="text" name="company_desc" class="form-control" required>
    </div>
   
    <button type="submit" class="btn btn-primary">Save Company</button>
</form>

</div>
@endsection