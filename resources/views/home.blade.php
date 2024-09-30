@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="display-4">Welcome!</h1>
            <p class="lead mt-4">
                Hello
            </p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-3">Get Started</a>
        </div>
    </div>
</div>
@endsection
