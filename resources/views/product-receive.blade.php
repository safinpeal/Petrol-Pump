@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Receive Product</h2>
    
    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <form action="{{ route('place-receive') }}" method="POST">
        @csrf

        <!-- Select Company -->
        <div class="mb-3">
            <label for="company_id" class="form-label">Select Company</label>
            <select name="company_id" class="form-select" required>
                <option value="">-- Choose Company --</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Product -->
        <div class="mb-3">
            <label for="product_id" class="form-label">Select Product</label>
            <select name="product_id" class="form-select" required>
                <option value="">-- Choose Product --</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" step="0.01" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Receive Order</button>
    </form>
</div>
@endsection
