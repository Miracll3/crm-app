<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'uuid' => 'required|unique:clients',
            'id_number' => 'required|unique:clients',
            'date_of_birth' => 'required|date',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:clients',
            'telephone' => 'required | regex:/^(\+?[0-9]+)$/ | min:10 | max:15',
            'status' => 'required',
        ]);

        Client::create($request->all());

        return redirect()->route('client.index')
            ->with('success', 'Client created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'uuid' => 'required|unique:clients,uuid,' . $client->id,
            'id_number' => 'required|unique:clients,id_number,' . $client->id,
            'date_of_birth' => 'required|date',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'telephone' => 'required | regex:/^(\+?[0-9]+)$/ | min:10 | max:15',
            'status' => 'required',
        ]);

        $client->update($request->all());

        return redirect()->route('client.index')
            ->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('client.index')
            ->with('success', 'Client deleted successfully');
    }
}
