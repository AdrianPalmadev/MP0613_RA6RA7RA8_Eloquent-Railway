<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        // Get distinct origin stations from tickets_tbl
        $origin_stations = DB::table('tickets_tbl')
            ->distinct()
            ->pluck('origin_station')
            ->unique()
            ->sort()
            ->values();

        // Get distinct destination stations from tickets_tbl
        $destination_stations = DB::table('tickets_tbl')
            ->distinct()
            ->pluck('destination_station')
            ->unique()
            ->sort()
            ->values();

        // Get distinct classes from tickets_tbl
        $classes = DB::table('tickets_tbl')
            ->distinct()
            ->pluck('class')
            ->unique()
            ->sort()
            ->values();

        return view('welcome', [
            'origin_stations' => $origin_stations,
            'destination_stations' => $destination_stations,
            'classes' => $classes
        ]);
    }
}
