@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add City</h2>
    <form action="{{ route('cities.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cityName" class="form-label">City Name</label>
            <input type="text" class="form-control" id="cityName" name="cityName" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
