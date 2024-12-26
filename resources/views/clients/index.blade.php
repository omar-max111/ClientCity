@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Clients</h2>
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Add Client</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->firstName }}</td>
                <td>{{ $client->lastName }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->city->cityName }}</td>
                <td>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $clients->links() }}
</div>
@endsection
