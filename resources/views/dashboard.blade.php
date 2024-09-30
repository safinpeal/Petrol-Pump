@extends('layouts.app')

@section('content')


<a href="{{route('companies.create')}}">Add Company</a>
<a href="{{ route('products.create') }}">Add Product</a>
<a href="{{ route('product-buy') }}">Buy Product</a>
<a href="{{ route('product-receive') }}">Receive Product</a>



@endsection