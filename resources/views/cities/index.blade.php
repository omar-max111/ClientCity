@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cities</h2>
    <a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">Add City</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>City Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->cityName }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
