@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('bmi.calculator') }}">
        @csrf
        <!-- Add input fields for Name, Age, Gender, Height, Weight -->
        <!-- Example for Name: -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <!-- Add other fields similarly -->
        <button type="submit" class="btn btn-primary">Calculate BMI</button>
    </form>
</div>
@endsection
