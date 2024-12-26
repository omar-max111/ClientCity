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
      
        //ADD THE CODE IN THIS PLACE
        $client = new Client;
        $client->firstName = $request->input('firstName');
        $client->lastName = $request->input('lastName');
        $client->email = $request->input('email');
        $client->password = $request->input('password');
        $client->city_id = $request->input('cities');
        $client->save();
        
    
        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
    }
}
