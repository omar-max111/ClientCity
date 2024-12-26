<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\City;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('city')->paginate(5);
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        $cities = City::all();
        return view('clients.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'password' => 'required|string|min:6',
            'city_id' => 'required|exists:cities,id',
        ]);

        Client::create($request->all());
        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
    }
}
