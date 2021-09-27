<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    public function index(){
        
        $clients = (client::get());

        return view('clients.index', [
            'clients' => $clients
        ]);
    }
    
    public function show(int $id){

        $client  = client::find($id);
        
        return view('clients.show',[
            'client' => $client
        ]);
    }
}
