<?php

namespace App\Http\Controllers;

use App\Exceptions\CannotDelete;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\EditClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(20);

        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(CreateClientRequest $request)
    {
        Client::create($request->validated());

        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(EditClientRequest $request, Client $client)
    {
        $client->update($request->validated());

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        abort_if(Gate::denies('delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $client->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() === '23000') {
               return redirect()->back()->with('status', 'Client belongs to project and/or task. Cannot delete.');
           }
        }

        return redirect()->route('clients.index');
    }
}
