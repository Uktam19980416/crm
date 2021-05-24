<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $stages = Stage::all();
        $clients = DB::table('clients')->leftJoin('stages', 'stages.stage_type', '=', 'clients.stage_id')->select('clients.name', 'clients.company_name', 'clients.phone_number', 'clients.stage_id')
        ->get();
        $clients = collect($clients)->groupBy("stage_id");
        return view('clients', compact('services', 'stages', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::get();
        $stages = Stage::get();
        $services = Service::get();
        return view('addClient')->with('clients', $clients)
                                ->with('services', $services)
                                ->with('stages', $stages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $stage_id = Stage::get();
        // $service_id = Service::get();
        $clients = new Client();
        $clients->name = $request->name;
        $clients->phone_number = $request->phone_number;
        $clients->company_name = $request->company_name;
        $clients->service_id = $request->service_id;
        $clients->stage_id = $request->stage_id;
        $clients->comments = $request->comments;
        $clients->save();

        return redirect()->back()->with('status', 'Clients info has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(){
        $search_text = $_GET['query'];
        $stages = Stage::all();
        $clients = Client::where('name', 'LIKE', '%'.$search_text.'%')
        ->orWhere('phone_number', 'LIKE', '%'.$search_text.'%')
        ->orWhere('company_name', 'LIKE', '%'.$search_text.'%')
        ->get();

        return view('clients', compact('clients', 'stages'));
    }
}
