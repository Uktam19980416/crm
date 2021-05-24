<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $menus = Stage::query()
        ->with('clients')
        ->get();

        return view('index', compact('menus'));
    }
}
