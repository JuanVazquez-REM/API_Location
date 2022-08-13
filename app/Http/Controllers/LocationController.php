<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::orderByDesc('id')->first();
        return response()->json(['status' => true,'location'=>$location], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $location = Location::create([
            'latitude'=> $request->latitude,
            'longitude'=> $request->longitude
        ]);

        return response()->json(['status' => true,'message'=>"Successfully created"], 200);
    }

}
