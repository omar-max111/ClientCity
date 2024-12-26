<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $request->validate(['cityName' => 'required|string|max:255']);
        City::create($request->all());
        return redirect()->route('cities.index')->with('success', 'City created successfully!');
    }
}

