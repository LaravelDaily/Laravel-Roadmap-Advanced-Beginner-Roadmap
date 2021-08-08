<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ClientResource;
use App\Models\Client;

class ClientController
{
    public function __construct()
    {
        request()->headers->set('Accept', 'application/json');
    }

    public function index()
    {
        return ClientResource::collection(Client::paginate(20));
    }
}
