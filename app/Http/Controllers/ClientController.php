<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Redirect,Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(5);
        
        return view ('clients.index',compact('clients'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create($request->all());
       

                        return redirect()->route('clients.index')
                        ->with('client_added','Client a été créé avec succès');

                        $cltId = $request->clt_id;
                        Client::updateOrCreate(['id' => $artId],['non' => $request->nom,
                        'prenom' => $request->prenom,'email' => $request->email,'adresse' => $request->adresse, 
                        'pays' => $request->pays, 'ville' => $request->ville,
                        'code_postal' => $request->code_postal,'telephone' => $request->telephone]);
                        if(empty($request->clt_id))
                    return redirect()->route('clients.index')->with('client_added','Client a été créé avec succès');
                        else
                
                        return redirect()->route('clients.index')->with('client_updated','Client a été modifié avec succès');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
		$client = Client::where($where)->first();
		return Response::json($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        //$client->delete();
    
        //return redirect()->route('clients.index')->with('client_deleted','Client a été supprimé avec succès');
        $clt = Client::where('id',$id)->delete();
		return Response::json($clt);
       
    }
}
