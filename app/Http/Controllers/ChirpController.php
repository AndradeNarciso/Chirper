<?php

namespace App\Http\Controllers;

use App\Mappers\ChirpMapper;
use Illuminate\Http\Request;
use App\Models\Chirp;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private ChirpMapper $chirperMapper) {}

    public function index()
    {
        $chirps = Chirp::all();
        $chirpsDto = $chirps->map(fn($chirps) => $this->chirperMapper->toDto($chirps));

        return view('home', ['chirps' => $chirpsDto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
