<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // filtro i treni dove current_time è uguale a departure_time
        // ::raw permette di avviare una query tra parentesi
        // i risultati sono molti, ne prendo solo 50
        $trains = Train::whereDate('departure_time', '=', Train::raw('DATE(current_date)'))->limit(50)->orderBy('departure_time', 'ASC')->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
